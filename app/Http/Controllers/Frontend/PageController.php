<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Genre;
use App\Model\ImageCategory;
use App\Model\Mood;
use App\Model\Music;
use App\Model\Tag;
use App\Model\Theme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('Frontend.index');
        }
        return false;
    }

    public function music(Request $request)
    {
        if ($request->ajax()) {

            $id = $request->theme;
            $thm = Theme::where('id', '=', $id)->first();
            $this->data('theme', $thm);
            if ($request->has('theme')) {
                $mus = Theme::join('music_theme', 'music_theme.theme_id', '=', 'themes.id')
                    ->join('musics', 'musics.id', '=', 'music_theme.music_id')
                    ->where('themes.id', $id);
            }
            if ($request->has('genre')) {
                $gen_id = $request->genre;

                $thm = Genre::where('id', '=', $gen_id)->first();
                $this->data('genre', $thm);
                $mus = Genre::join('music_genre', 'music_genre.genre_id', '=', 'genres.id')
                    ->join('musics', 'musics.id', '=', 'music_genre.music_id')
                    ->where('genres.id', $gen_id);
            }
            if ($request->has('mood')) {
                $mood_id = $request->mood;
                $mod = Mood::where('id', '=', $mood_id)->first();
                $this->data('mood', $mod);
                $mus = Mood::join('music_mood', 'music_mood.mood_id', '=', 'moods.id')
                    ->join('musics', 'musics.id', '=', 'music_mood.music_id')
                    ->where('moods.id', $mood_id);
            }
            if ($request->has('theme') && $request->has('mood')) {
                $id = $request->theme;
                $mood_id = $request->mood;
                $music = Music::join('music_theme', 'music_theme.music_id', '=', 'musics.id')
                    ->join('themes', 'themes.id', '=', 'music_theme.theme_id')
                    ->join('music_mood', 'music_mood.music_id', '=', 'musics.id')
                    ->join('moods', 'moods.id', '=', 'music_mood.mood_id')
                    ->where('themes.id',$id)->where('moods.id',$mood_id)
                    ->select('musics.*')->get();
                $this->data('theme_mood',$music);
            }
            if ($request->has('theme') && $request->has('genre'))
            {
                $id = $request->theme;
                $gen_id = $request->genre;
                $song=Music::join('music_theme', 'music_theme.music_id', '=', 'musics.id')
                    ->join('themes', 'themes.id', '=', 'music_theme.theme_id')
                    ->join('music_genre', 'music_genre.music_id', '=', 'musics.id')
                    ->join('genres', 'genres.id', '=', 'music_genre.genre_id')
                    ->where('themes.id',$id)->where('genres.id',$gen_id)
                    ->select('musics.*')->get();
                $this->data('theme_genre',$song);
            }
            if ($request->has('genre') && $request->has('mood'))
            {
                $mood_id = $request->mood;
                $gen_id = $request->genre;
                $aud=Music::join('music_genre', 'music_genre.music_id', '=', 'musics.id')
                    ->join('genres', 'genres.id', '=', 'music_genre.genre_id')
                    ->join('music_mood', 'music_mood.music_id', '=', 'musics.id')
                    ->join('moods', 'moods.id', '=', 'music_mood.mood_id')
                    ->where('moods.id',$mood_id)->where('genres.id',$gen_id)
                    ->select('musics.*')->get();
                $this->data('mood_genre',$aud);
            }
            if ($request->has('theme') && $request->has('genre') && $request->has('mood'))
            {
                $id = $request->theme;
                $mood_id = $request->mood;
                $gen_id = $request->genre;
                $audio=Music::join('music_genre', 'music_genre.music_id', '=', 'musics.id')
                    ->join('genres', 'genres.id', '=', 'music_genre.genre_id')
                    ->join('music_mood', 'music_mood.music_id', '=', 'musics.id')
                    ->join('moods', 'moods.id', '=', 'music_mood.mood_id')
                    ->join('music_theme', 'music_theme.music_id', '=', 'musics.id')
                    ->join('themes', 'themes.id', '=', 'music_theme.theme_id')
                    ->where('moods.id',$mood_id)->where('genres.id',$gen_id)->where('themes.id',$id)
                    ->select('musics.*')->get();
                $this->data('theme_gen_mood',$audio);
            }

            $filter = $mus->get();
            $this->data('filter', $filter);

            return view('Frontend.filter.musicfilter', $this->data);
        }
        $music = Music::all();
        $this->data('music', $music);
        $tag = Tag::all();
        $this->data('tags', $tag);
        $theme = Theme::all();
        $this->data('theme', $theme);
        $mood = Mood::all();
        $this->data('mood', $mood);
        $gen = Genre::all();
        $this->data('genre', $gen);
        return view('Frontend.music', $this->data);
    }

    public function search_results(Request $request)
    {
        if ($request->ajax())
        {
            if ($request->has('search'))
            {

                $query = $request->search;
                if ($query==null){
                    $this->data('val','');
                    return view('Frontend.search.searchable', $this->data);
                }
                $result = explode(',', $query);
                $pro = Music::where(function ($query) use ($result) {
                    foreach ($result as $search) {
                        $query->where('musics.name', 'like', '%' . $search . '%');
                    }
                });
                $ser=$pro->get();
                $this->data('ser',$ser);
                return view('Frontend.search.searchable', $this->data);

            }
        }

        return view('Frontend.search.searchable', $this->data);
    }

    public function photo(Request $request)
    {
        $cat = ImageCategory::all();
        $this->data('cat', $cat);

        return view('Frontend.photo', $this->data);

    }
}

