<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Genre;
use App\Model\IconUpload;
use App\Model\Mood;
use App\Model\Music;
use App\Model\MusicSlider;
use App\Model\Theme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainSearchController extends Controller
{
    public function main_search(Request $request)
    {

        if ($request->music) {

            $query = $request->search;
            if ($query == null) {
                $theme = Theme::all();
                $this->data('theme', $theme);
                $mood = Mood::all();
                $this->data('mood', $mood);
                $gen = Genre::all();
                $this->data('genre', $gen);
                $this->data('empty_search', '');
                $slide=MusicSlider::all();
                $this->data('slide',$slide);
                return view('Frontend.music', $this->data);
            }
            $result = explode(',', $query);
            $pro = Music::where(function ($query) use ($result) {
                foreach ($result as $search) {
                    $query->where('musics.name', 'like', '%' . $search . '%');
                }
            });
            $ser = $pro->get();
            if ($ser->isEmpty()) {
                $theme = Theme::all();
                $this->data('theme', $theme);
                $mood = Mood::all();
                $this->data('mood', $mood);
                $gen = Genre::all();
                $this->data('genre', $gen);
                $this->data('empty_search', '');
                $slide=MusicSlider::all();
                $this->data('slide',$slide);
                return view('Frontend.music', $this->data);
            }
            $theme = Theme::all();
            $this->data('theme', $theme);
            $mood = Mood::all();
            $this->data('mood', $mood);
            $gen = Genre::all();
            $this->data('genre', $gen);
            $this->data('main_search', $ser);
            $slide=MusicSlider::all();
            $this->data('slide',$slide);
            return view('Frontend.music', $this->data);

        } else {
            $query = $request->get('search');
            if ($query==null){
                return redirect()->back()->with('error', 'No Icons Found');

            }
            if (isset($query)) {
                $queryparam = explode(' ', $query);
            } else {
                $queryparam = null;
            }
            if (isset($queryparam)) {
                foreach ($queryparam as $queries) {
                    $icons = IconUpload::join('icons_category', 'icons_category.icon_id', '=', 'icon_uploads.id')
                        ->join('icon_categories', 'icons_category.category_id', '=', 'icon_categories.id')
                        ->join('icons_style', 'icons_style.icon_id', '=', 'icon_uploads.id')
                        ->join('icon_styles', 'icon_styles.id', 'icons_style.style_id')
                        ->select('icon_categories.title', 'icon_uploads.name', 'icon_uploads.description', 'icon_styles.slug')
//                    ->where('icon_uploads.name', 'like', '%' . $queries . '%')
                        ->orwhere('icon_categories.title', 'like', '%' . $queries . '%');

                }
            }


                if ($icons->first() == null) {
                    return redirect()->back()->with('error', 'No Icons Found');
                }
            $icons_search = $icons->first()->slug;

            return redirect()->route('inner-icons', $icons_search);
        }

    }
}
