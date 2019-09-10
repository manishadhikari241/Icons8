<?php

namespace App\Http\Controllers\Frontend\Icons;

use App\Model\IconUpload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IconSearchController extends Controller
{
    public function autocomplete(Request $request)
    {
        $query = $request->get('query');
        if (isset($query)) {
            $queryparam = explode(' ', $query);
        } else {
            $queryparam = null;
        }
        if (isset($queryparam)) {
            foreach ($queryparam as $queries) {
                $icons = IconUpload::join('icons_category','icons_category.icon_id','=','icon_uploads.id')
                    ->join('icon_categories','icons_category.category_id','=','icon_categories.id')
                    ->join('icons_style','icons_style.icon_id','=','icon_uploads.id')
                    ->join('icon_styles','icon_styles.id','icons_style.style_id')
                    ->select('icon_categories.title','icon_uploads.name','icon_uploads.description','icon_styles.slug')
//                    ->where('icon_uploads.name', 'like', '%' . $queries . '%')
                    ->orwhere('icon_categories.title', 'like', '%' . $queries . '%');

            }
        }
        $icons_search = $icons->get();
        return response()->json($icons_search);
    }
}
