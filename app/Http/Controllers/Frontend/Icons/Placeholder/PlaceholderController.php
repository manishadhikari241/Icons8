<?php

namespace App\Http\Controllers\Frontend\Icons\Placeholder;

use App\Http\Controllers\BaseController;
use App\Libraries\Intervention\Placeholder;
use App\Model\IconUpload;
use File;
use Hashids;
use Illuminate\Support\Facades\Input;
use Image;
use Log;
use Redirect;
use Request;

class PlaceholderController extends BaseController
{

    /*
     * App\Libraries\Intervention\Placeholder
     */
    private $placeholder;

    /*
     * Request::getClientIp()
     */
    private $ip;

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    public function __construct(Placeholder $placeholder)
    {

        $this->placeholder = $placeholder;
        $this->ip = Request::getClientIp();
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    public function getIndex(\Illuminate\Http\Request $request)
    {
        $icon = IconUpload::where('id', $request->id)->first();
        if (Input::all())
            return $this->getImage();

        $data = [
            'fontawesomes' => $this->_iconGetIcon('fa'),
            'ionics' => $this->_iconGetIcon('ion'),
            'glyphicons' => $this->_iconGetIcon('glyphicon'),
            'fonts' => $this->_fonts(),
            'icon' => $icon
        ];

        return $this->view('pages.placeholder.index', $data);
    }

    /**
     * Generate image
     *
     * @return void
     */
    public function _fonts($font = null)
    {
        $fontfamily_path = public_path("imageeditor/font-family");
        $allfonts = File::allFiles($fontfamily_path);
        $fonts = [];

        if ($allfonts) {
            foreach ($allfonts as $allfont) {
                $fontinfo = pathinfo($allfont);
                $name = '';
                if ($font !== null) {
                    if ($font == $fontinfo['filename'])
                        return $fontinfo['basename'];
                } else {
                    if ($fontinfo['filename'] && in_array($fontinfo['extension'], ['ttf', 'otf']))
                        $name = $fontinfo['filename'];
                    $name = ucfirst($name);
                    $name = str_replace('_', ' ', $name);
                    preg_match('/^[a-z 0-9]{4,64}$/i', $name, $matches);
                    $name = reset($matches);
                    if ($name) {
                        $fonts[] = [
                            'name' => $name,
                            'code' => $fontinfo['filename']
                        ];
                    }
                }
            }
        }

        return $fonts;

    }

    /**
     * Generate image
     *
     * @return void
     */
    public function _iconGetIcon($jsonfile, $code = null)
    {
        dd($jsonfile);
//        $filepath = public_path("imageeditor/icons/{$jsonfile}.json");
        $filepath = asset("storage/Webcontent/icons/icon_upload/{$jsonfile}.json");

        if (File::exists($filepath)) {

            $content = File::get($filepath);
            $json = json_decode($content, true);

            if ($code !== null)
                return @$json[$code];

            return array_keys($json);
        }

        return null;

    }

    /**
     * Generate image
     *
     * @return void
     */
    public function getImage($size = '420x320', $background = 'cccccc', $color = '757575', $icon = null)
    {

        $haserror = false;

        $input = Input::all();
        $ip = $this->ip;
        Log::info("{$ip}: size: {$size}; background: {$background}; color: {$color}; icon: {$icon}; input: " . print_r($input, true));

        if (isset($input['size']))
            $size = $input['size'];

        if (isset($input['bgcolor']))
            $background = $input['bgcolor'];

        if (isset($input['color']))
            $color = $input['color'];

        if (isset($input['icon']))
            $icon = $input['icon'];

        $fontfamily = 'impact';
        if (isset($input['font-family']))
            $fontfamily = $input['font-family'];

        $gettext = null;
        if (isset($input['text']))
            $gettext = $input['text'];

        $getfontsize = null;

        if (isset($input['font-size']))
            $getfontsize = $input['font-size'];
        $issize = $this->placeholder->validate_size($size);

        $width = 400;
        $height = 320;
        $iconcode = [];
        if ($issize === true) {

            $haserror = true;
//            dd('ok');

            $img = $this->placeholder->img_invalid("Invalid dimensions", "Format should be width x height", url('320x320'));
        } else {

            if ($issize['type'] === 'shorturl') {
                return Redirect::to($issize['url']);
            }

            $width = $issize['width'];
            $height = $issize['height'];

            if ($width > 1025 || $height > 1025) {
                $haserror = true;
                $img = $this->placeholder->img_invalid("Invalid dimensions", "Specified dimensions too large");
            }

            if ($width < 8 || $height < 8) {
                $haserror = true;
                $img = $this->placeholder->img_invalid("Invalid dimensions", "Specified dimensions too small");
            }
        }

        $iscolor = $this->placeholder->validate_hexcolor($color);
        if ($iscolor === false) {
            $haserror = true;
            $img = $this->placeholder->img_invalid("Invalid font color", "Format should be hexadecimal format", url('320x320/cccccc/757575'));
        }

        $isbgcolor = $this->placeholder->validate_hexcolor($background);
        if ($isbgcolor == false && $background !== 'transparent') {
            $haserror = true;
            $img = $this->placeholder->img_invalid("Invalid background color", "Format should be hexadecimal format", url('320x320/cccccc'));
        }

        $fontfamily_ext = "{$fontfamily}.ttf";
        if ($fontfamily != 'impact') {

            $fontfamily_ext = $this->_fonts($fontfamily);
            if (!$fontfamily_ext) {
                $haserror = true;
                $img = $this->placeholder->img_invalid("Missing Font", $fontfamily . " Font Family not found.");
            }

        }

        if ($icon !== null) {

            $icontype = explode('-', $icon);
            $icontype = reset($icontype);

            $unicode = $this->_iconGetIcon($icontype, $icon);

            $iconcode = [];
            if ($unicode) {
                $iconcode = [
                    'fontfamily' => $icontype,
                    'code' => $icon,
                    'unicode' => $unicode
                ];
            }

            if ($unicode == null) {
                $haserror = true;
                $img = $this->placeholder->img_invalid("Missing Font Icon", "Icon not found.");
            }

        }

        if ($haserror === false) {

            if ($background === 'transparent')
                $img = Image::canvas($width, $height);
            else
                $img = Image::canvas($width, $height, $background);

            $display_text = $size;

            if ($gettext) {
                $display_text = $gettext;
                $display_text = preg_replace('/_BR_/', "\n", $display_text);
                $display_text = preg_replace('/_br_/', "\n", $display_text);
                $display_text = preg_replace('/[+]/', ' ', $display_text);
            }

            $x = ($width / 2);
            $y = $height / 2;

            $fontsize = ($width > $height) ? $y / 4 : $x / 4;
            if (strlen($display_text) == 1 || $iconcode)
                $fontsize = ($width > $height) ? $height - ($height / 4) : $width - ($width / 4);

            if ($getfontsize) {
                $getfontsize = str_replace('px', '', $getfontsize);
                $fontsize = intval($getfontsize);
            }

            $fontpath = public_path("imageeditor/font-family/{$fontfamily_ext}");
            if ($display_text != '_none_' || $iconcode) {

                if ($iconcode) {
                    $fontfamily = $iconcode['fontfamily'];
                    $display_text = $iconcode['unicode'];
                    $fontpath = public_path("imageeditor/fonts/_{$fontfamily}.ttf");
                }

                $img->text($display_text, $x, $y, function ($font) use ($fontsize, $color, $fontpath) {
                    $font->file($fontpath);
                    $font->size($fontsize);
                    $font->color($color);
                    $font->align('center');
                    $font->valign('middle');
                });
            }

        }

        header('Content-Type: image/png');

        if (@$input['download'] === 'true') {
            file_put_contents('imgholdr-image.png', file_get_contents($img->encode('data-url')));
            header("Pragma: public");
            header("Expires: 0");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
            header("Cache-Control: private", false);
            header('Content-Type: application/stream');
            header("Content-Disposition: attachment; filename=\"imgholdr-image.png\"");
            header("Content-Transfer-Encoding: binary");
            // ob_clean();
            // flush();
            readfile('imgholdr-image.png');
            return;
        }

        if (Request::header('content-type') == 'application/x-www-form-urlencoded; charset=UTF-8')
            return $img->encode('data-url');

        return $img->response('png');

    }

}