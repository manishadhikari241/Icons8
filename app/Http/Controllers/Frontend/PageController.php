<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Age;
use App\Model\BodyType;
use App\Model\Gender;
use App\Model\Genre;
use App\Model\Hair;
use App\Model\Image;
use App\Model\ImageCategory;
use App\Model\Mood;
use App\Model\Music;
use App\Model\Order;
use App\Model\Race;
use App\Model\SpecialFeature;
use App\Model\Tag;
use App\Model\Theme;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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
                    ->where('themes.id', $id)->where('moods.id', $mood_id)
                    ->select('musics.*')->get();
                $this->data('theme_mood', $music);
            }
            if ($request->has('theme') && $request->has('genre')) {
                $id = $request->theme;
                $gen_id = $request->genre;
                $song = Music::join('music_theme', 'music_theme.music_id', '=', 'musics.id')
                    ->join('themes', 'themes.id', '=', 'music_theme.theme_id')
                    ->join('music_genre', 'music_genre.music_id', '=', 'musics.id')
                    ->join('genres', 'genres.id', '=', 'music_genre.genre_id')
                    ->where('themes.id', $id)->where('genres.id', $gen_id)
                    ->select('musics.*')->get();
                $this->data('theme_genre', $song);
            }
            if ($request->has('genre') && $request->has('mood')) {
                $mood_id = $request->mood;
                $gen_id = $request->genre;
                $aud = Music::join('music_genre', 'music_genre.music_id', '=', 'musics.id')
                    ->join('genres', 'genres.id', '=', 'music_genre.genre_id')
                    ->join('music_mood', 'music_mood.music_id', '=', 'musics.id')
                    ->join('moods', 'moods.id', '=', 'music_mood.mood_id')
                    ->where('moods.id', $mood_id)->where('genres.id', $gen_id)
                    ->select('musics.*')->get();
                $this->data('mood_genre', $aud);
            }
            if ($request->has('theme') && $request->has('genre') && $request->has('mood')) {
                $id = $request->theme;
                $mood_id = $request->mood;
                $gen_id = $request->genre;
                $audio = Music::join('music_genre', 'music_genre.music_id', '=', 'musics.id')
                    ->join('genres', 'genres.id', '=', 'music_genre.genre_id')
                    ->join('music_mood', 'music_mood.music_id', '=', 'musics.id')
                    ->join('moods', 'moods.id', '=', 'music_mood.mood_id')
                    ->join('music_theme', 'music_theme.music_id', '=', 'musics.id')
                    ->join('themes', 'themes.id', '=', 'music_theme.theme_id')
                    ->where('moods.id', $mood_id)->where('genres.id', $gen_id)->where('themes.id', $id)
                    ->select('musics.*')->get();
                $this->data('theme_gen_mood', $audio);
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
        if ($request->ajax()) {
            if ($request->has('search')) {

                $query = $request->search;
                if ($query == null) {
                    $this->data('val', '');
                    return view('Frontend.search.searchable', $this->data);
                }
                $result = explode(',', $query);
                $pro = Music::where(function ($query) use ($result) {
                    foreach ($result as $search) {
                        $query->where('musics.name', 'like', '%' . $search . '%');
                    }
                });
                $ser = $pro->get();
                $this->data('ser', $ser);
                return view('Frontend.search.searchable', $this->data);

            }
        }

        return view('Frontend.search.searchable', $this->data);
    }

    public function photo(Request $request)
    {
        $img = Image::where('status', '=', 1);
        $this->data('img', $img);
        if ($request->ajax()) {

            if ($request->has('new')) {
                $img->where('is_new', '=', 1);
            }
            if ($request->has('rising')) {
                $img->where('is_rising', '=', 1);
            }
            if ($request->has('top')) {
                $img->where('is_top', '=', 1);
            }
            if ($request->has('genderId') ) {
                $id = $request->genderId;
                $join = $img->join('table_image_gender', 'table_image_gender.image_id', '=', 'images.id')
                    ->join('genders', 'table_image_gender.gender_id', '=', 'genders.id')
                    ->where('genders.id', $id)->select('images.*');
            }
            if ($request->has('ageId')) {
                $age_id = $request->ageId;
                $join = $img->join('table_image_age', 'table_image_age.image_id', '=', 'images.id')
                    ->join('ages', 'table_image_age.age_id', '=', 'ages.id')
                    ->where('ages.id', $age_id)->select('images.*');
            }
            if ($request->has('raceId')) {
                $race_id = $request->raceId;
                $join = $img->join('table_image_race', 'table_image_race.image_id', '=', 'images.id')
                    ->join('races', 'table_image_race.race_id', '=', 'races.id')
                    ->where('races.id', $race_id)->select('images.*');
            }
            if ($request->has('hairId')) {

                $hair_id = $request->hairId;
                $join = $img->join('table_image_hair', 'table_image_hair.image_id', '=', 'images.id')
                    ->join('hairs', 'table_image_hair.hair_id', '=', 'hairs.id')
                    ->where('hairs.id', $hair_id)->select('images.*');
            }
            if ($request->has('bodyId')) {
                $body_id = $request->bodyId;
                $join = $img->join('table_image_body_type', 'table_image_body_type.image_id', '=', 'images.id')
                    ->join('body_types', 'table_image_body_type.body_id', '=', 'body_types.id')
                    ->where('body_types.id', $body_id)->select('images.*');
            }
            if ($request->has('specialId')) {
                $special_id = $request->specialId;
                $join = $img->join('table_image_special_feature', 'table_image_special_feature.image_id', '=', 'images.id')
                    ->join('special_features', 'table_image_special_feature.special_id', '=', 'special_features.id')
                    ->where('special_features.id', $special_id)->select('images.*');
            }
            if ($request->has('category_id'))
            {
                $cat_id=$request->category_id;
                $join=$img->join('table_image_category','table_image_category.image_id','=','images.id')
                    ->where('table_image_category.category_id',$cat_id)->select('images.*');
            }

            $var = $img->get();
            $this->data('image', $var);
            return view('Frontend.filter.photofilter', $this->data);

        }
        $cat = ImageCategory::all();
        $this->data('cat', $cat);
        $gen = Gender::all();
        $this->data('gender', $gen);
        $age = Age::all();
        $this->data('age', $age);
        $race = Race::all();
        $this->data('race', $race);
        $hair = Hair::all();
        $this->data('hair', $hair);
        $body = BodyType::all();
        $this->data('body', $body);
        $spec = SpecialFeature::all();
        $this->data('spec', $spec);
        $img = Image::orderBy('created_at')->get();
        $this->data('img', $img);

        return view('Frontend.photo', $this->data);

    }

    public function modal($id)
    {
        $image = Image::where('id', '=', $id)->first();
        $this->data('image', $image);
        $img = Image::orderBy('created_at')->get();
        $this->data('img', $img);
        return view('Frontend.modal', $this->data);
    }

    public function download($id)
    {
        $img = Image::where('id', $id)->firstOrFail();
        $path = public_path('images/photo_upload/' . $img->image);
        $headers = array(
            'Content-Type:image/jpeg',
        );
        return response()->download($path, $img
            ->original_filename, $headers);
    }

    public function image_orders(Request $request)
    {
        $id = $request->order_id;
        $data['image_id'] = $id;
        $data['user_id'] = Auth::user()->id;
        $data['status'] = '0';
        $new = Order::create($data);
        $new->images()->attach($id);
        $insert = DB::table('user_images')->insert(['image_id' => $id, 'user_id' => Auth::user()->id]);
        $create = DB::table('user_orders')->insert(['user_id' => Auth::user()->id, 'order_id' => $new->id]);
        if ($new && $insert && $create) {
            return \response()->json([
                'message' => 'Order placed successfully'
            ]);
        }
    }

    public function photo_filter(Request $request)
    {
        $photo = Image::all();
        $this->data('image', $photo);
        return view('Frontend.filter.photofilter', $this->data);
    }

    public function filtered_modal(Request $request)
    {
        $id = $request->id;
        $image = Image::where('id', '=', $id)->first();
        $this->data('image', $image);
        $img = Image::orderBy('created_at')->get();
        $this->data('img', $img);
        return view('Frontend.filter.filtered_modal', $this->data);

    }

    public function editor()
    {
        return view('Frontend.pixie');
    }

}


