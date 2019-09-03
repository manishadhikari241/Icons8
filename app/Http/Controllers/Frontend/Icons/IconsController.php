<?php

namespace App\Http\Controllers\Frontend\Icons;

use App\Http\Controllers\Backend\IconController;
use App\Model\IconStyle;
use App\Model\IconUpload;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IconsController extends Controller
{
    private $category;

    public function __construct(IconController $category)
    {
        $this->category=$category;
    }

    public function index(Request $request)
    {
        $iconstyle = IconStyle::all();
        $this->data('iconstyle', $iconstyle);
        return view('Frontend.Icons.icons', $this->data);
    }

    public function inner_icons(Request $request)
    {

//        $iconsstyle = IconStyle::join('icons_style', 'icons_style.style_id', '=', 'icon_styles.id')
//            ->join('icon_uploads', 'icon_uploads.id', '=', 'icons_style.icon_id')
//            ->where('icon_styles.slug', $request->slug)
//            ->select('icon_uploads.*')
//            ->pluck('icon_uploads.id');
//
//        $iconupload = IconUpload::join('icons_category', 'icons_category.icon_id', '=', 'icon_uploads.id')
//            ->join('icon_categories', 'icon_categories.id', 'icons_category.category_id')
//            ->whereIn('icons_category.category_id',$iconsstyle)
//            ->get();
//
//        dd($iconupload);
        $iconsstyle = IconStyle::join('icons_style', 'icons_style.style_id', '=', 'icon_styles.id')
            ->join('icons_category', 'icons_category.icon_id', '=', 'icons_style.icon_id')
            ->rightJoin('icon_categories', 'icon_categories.id', 'icons_category.category_id')
            ->where('icon_styles.slug', $request->slug)
            ->distinct('icon_categories.id')
            ->select('icon_categories.*')
            ->get();
        $stylename = IconStyle::where('slug', $request->slug)->first()->name;
        $iconstyle=$this->category->getCategory();
        $this->data('iconstyle', $iconstyle);
        $this->data('style', $stylename);
        $this->data('categories', $iconsstyle);
        return view('Frontend.Icons.inner-icons', $this->data);
    }

    public function category_click_icons(Request $request)
    {
        if ($request->ajax()) {
            $category_id = $request->category_id;

            $icons = IconUpload::join('icons_category', 'icons_category.icon_id', 'icon_uploads.id')
                ->where('icons_category.category_id', $request->category_id)
                ->select('icon_uploads.*')
                ->get();
            $this->data('icons', $icons);
            return view('Frontend.Icons.category_click_icons', $this->data);
        }
        return false;
    }


}
