<?php

namespace App\Libraries\Intervention;

use Image;

class Placeholder {

	/**
	 * 404
	 *
	 * @return void
	 */
	public function validate_size($size) {

		if ( $size ) {

			$wh     = explode('x', $size);
			$width  = intval($wh[0]);
			$height = intval(@$wh[1]);

			if ( $width > 0 && $height > 0 ) {
				return [
							'type'   => 'size',
							'width'  => $width,
							'height' => $height
					   ];
			}

		}
		
		return true;
	}

	/**
	 * 404
	 *
	 * @return void
	 */
	public function validate_hexcolor($color) {

		if ( strlen($color) === 3 || strlen($color) === 6 )
			return ctype_xdigit($color);

		return false;
	}

	/**
	 * 404
	 *
	 * @return void
	 */
	public function img_invalid($text, $text2 = null, $sample_format = null) {

		$fontfamily = public_path('imageeditor/font-family/impact.ttf');
		$color  = '#757575';
		$align  = 'center';
		$valign = 'middle';

		$img = Image::canvas(420, 320, '#cccccc');

		$img->text($text, 210, 140, function($font) use ( $fontfamily, $color, $align, $valign ) {
		    $font->file($fontfamily);
		    $font->size(32);
		    $font->color($color);
		    $font->align($align);
		    $font->valign($valign);
		});

		if ( $text2 )  {
			$img->text($text2, 210, 168, function($font) use ( $fontfamily, $color, $align, $valign ) {
			    $font->file(public_path('imageeditor/font-family/arial.ttf'));
			    $font->size(14);
			    $font->color($color);
			    $font->align($align);
			    $font->valign($valign);
			});
		}

		if ( $sample_format )  {
			$img->text($sample_format, 210, 192, function($font) use ( $fontfamily, $color, $align, $valign ) {
			    $font->file(public_path('imageeditor/font-family/arial.ttf'));
			    $font->size(12);
			    $font->color('#444444');
			    $font->align($align);
			    $font->valign($valign);
			});
		}

		return $img;

	}
	

}