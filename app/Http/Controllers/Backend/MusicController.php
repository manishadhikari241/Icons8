<?php

namespace App\Http\Controllers\Backend;

use App\Model\Artist;
use App\Model\Genre;
use App\Model\Mood;
use App\Model\Music;
use App\Model\MusicSlider;
use App\Model\MusicTag;
use App\Model\Tag;
use App\Model\Theme;
use App\Model\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WebmasterSection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class MusicController extends BackendController
{
    public function tags(Request $request)
    {

        if ($request->isMethod('get')) {
            $tags = MusicTag::all();
            $this->data('tags', $tags);
            return view($this->backendtagPath . 'music_tags', $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|unique:music_tags,name',
            ]);
            $data['name'] = $request->name;
            if (MusicTag::create($data)) {
                Session::flash('success', 'Tags added');
                return redirect()->back();
            }
        }
    }

    public function delete_tags($id)
    {
        $find = MusicTag::findorfail($id);
        if ($find->delete()) {
            Session::flash('success', 'Tags deleted');
            return redirect()->back();
        }
    }

    public function edit_tags(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required'
            ]);
            $data['name'] = $request->name;
            $id = $request->id;
            $find = MusicTag::findorfail($id);
            if ($find->update($data)) {
                Session::flash('success', 'Tag updated');
                return redirect()->back();
            }
        }
    }

    public function themes(Request $request)
    {
        if ($request->isMethod('get')) {
            $themes = Theme::all();
            $this->data('theme', $themes);
            return view($this->backendmusicPath . 'themes', $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required'
            ]);
            $data['name'] = $request->name;
            if (Theme::create($data)) {
                Session::flash('success', 'Music theme added');
                return redirect()->back();
            }
        }
    }

    public function edit_theme(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required'
            ]);
            $data['name'] = $request->name;
            $id = $request->id;
            $find = Theme::findorfail($id);
            if ($find->update($data)) {
                Session::flash('success', 'Theme updated');
                return redirect()->back();
            }
        }
    }

    public function delete_theme($id)
    {
        $del = Theme::findorfail($id);
        if ($del->delete()) {
            Session::flash('success', 'Music theme deleted');
            return redirect()->back();
        }
    }

    public function genre(Request $request)
    {
        if ($request->isMethod('get')) {
            $gen = Genre::all();
            $this->data('genre', $gen);

            return view($this->backendmusicPath . 'genres', $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required'
            ]);
            $data['name'] = $request->name;
            if (Genre::create($data)) {
                Session::flash('success', 'Music genre added');
                return redirect()->back();
            }
        }
    }

    public function edit_genre(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required'
            ]);
            $data['name'] = $request->name;
            $id = $request->id;
            $find = Genre::findorfail($id);
            if ($find->update($data)) {
                Session::flash('success', 'Genre updated');
                return redirect()->back();
            }
        }
    }

    public function delete_genre($id)
    {
        $del = Genre::findorfail($id);
        if ($del->delete()) {
            Session::flash('success', 'Music genre deleted');
            return redirect()->back();
        }
    }

    public function mood(Request $request)
    {
        if ($request->isMethod('get')) {
            $mood = Mood::all();
            $this->data('mood', $mood);
            return view($this->backendmusicPath . 'moods', $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required'
            ]);
            $data['name'] = $request->name;
            if (Mood::create($data)) {
                Session::flash('success', 'Music mood added');
                return redirect()->back();
            }
        }
    }

    public function edit_mood(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required'
            ]);
            $data['name'] = $request->name;
            $id = $request->id;
            $find = Mood::findorfail($id);
            if ($find->update($data)) {
                Session::flash('success', 'Mood updated');
                return redirect()->back();
            }
        }
    }

    public function delete_mood($id)
    {
        $del = Mood::findorfail($id);
        if ($del->delete()) {
            Session::flash('success', 'Music mood deleted');
            return redirect()->back();
        }
    }

    public function artist(Request $request)
    {
        if ($request->isMethod('get')) {
            $art = Artist::all();
            $this->data('artist', $art);
            return view($this->backendmusicPath . 'artist', $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required'
            ]);
            $data['name'] = $request->name;
            if (Artist::create($data)) {
                Session::flash('success', 'Music artist added');
                return redirect()->back();
            }
        }
    }

    public function edit_artist(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required'
            ]);
            $data['name'] = $request->name;
            $id = $request->id;
            $find = Artist::findorfail($id);
            if ($find->update($data)) {
                Session::flash('success', 'Artist updated');
                return redirect()->back();
            }
        }
    }

    public function delete_artist($id)
    {
        $del = Artist::findorfail($id);
        if (DB::table('musics')->where('artist_id', $id)->get()->isNotEmpty()) {
            return redirect()->back()->with('error', 'Please delete related music first');

        }
        if ($del->delete()) {
            Session::flash('success', 'Music artist deleted');
            return redirect()->back();
        }
    }

    public function music(Request $request)
    {
        if ($request->isMethod('get')) {
            $mus = Music::all();
            $this->data('music', $mus);
            $tags = MusicTag::all();
            $this->data('tag', $tags);
            $theme = Theme::all();
            $this->data('theme', $theme);
            $genre = Genre::all();
            $this->data('genre', $genre);
            $mood = Mood::all();
            $this->data('mood', $mood);
            $art = Artist::all();
            $this->data('artist', $art);

            return view($this->backendmusicPath . 'music', $this->data);
        }
        if ($request->ajax()) {
//            dd($request->all());
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'image' => 'required',
                'themes' => 'required',
                'tag' => 'required',
                'genres' => 'required',
                'moods' => 'required',
                'audio' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'errors' => $validator->errors()->all()
                ]);
            }
            $data['name'] = $request->name;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = storage_path('app/public/WebContent/images/music/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            if ($request->hasFile('audio')) {
                $audio = $request->file('audio');
                $file = time() . '.' . $audio->getClientOriginalExtension();
                $destinationPath = storage_path('app/public/WebContent/music/');
                $audio->move($destinationPath, $file);
                $data['audio'] = $file;
            }
            $data['artist_id'] = $request->artist;
            $create = Music::create($data);

            foreach ($request->tag as $value) {
                DB::table('pivot_music_tags')->insert(['music_id' => $create->id, 'tag_id' => $value]);
            }
            foreach ($request->themes as $value) {
                DB::table('music_theme')->insert(['music_id' => $create->id, 'theme_id' => $value]);
            }
            foreach ($request->genres as $value) {
                DB::table('music_genre')->insert(['music_id' => $create->id, 'genre_id' => $value]);
            }
            foreach ($request->moods as $value) {
                DB::table('music_mood')->insert(['music_id' => $create->id, 'mood_id' => $value]);
            }
        }
        if ($create) {
            return response()->json([
                'message' => 'Music uploaded successfully',
                'status' => 'success'
            ]);
        }

    }


    public function show_music(Request $request)
    {
        if ($request->isMethod('get')) {

            $music = Music::all();
            $this->data('music', $music);
            return view($this->backendmusicPath . 'show_music', $this->data);

        }
    }

    public function delete_music(Request $request)
    {
        $id = $request->id;
        $find = Music::findorfail($id);
        if ($this->delete_file($id) && $this->delete_mp3($id) && $find->delete()) {
            Session::flash('success', 'Music deleted');
            return redirect()->back();
        }
    }

    public function delete_file($id)
    {
        $findData = Music::findorfail($id);
        $fileName = $findData->image;
        $deletePath = storage_path('app/public/WebContent/images/music/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }

    public function delete_mp3($id)
    {
        $find = Music::findorfail($id);
        $file = $find->audio;
        $deletePath = storage_path('app/public/WebContent/music/' . $file);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }

    public function edit_music(Request $request)
    {
        if ($request->isMethod('get')) {

            $music = Music::where('id', '=', $request->id)->first();
            $this->data('music', $music);
            $art = Artist::all();
            $this->data('artist', $art);
            $tag = MusicTag::all();
            $this->data('tag', $tag);
            $theme = Theme::all();
            $this->data('theme', $theme);
            $genre = Genre::all();
            $this->data('genre', $genre);
            $mood = Mood::all();
            $this->data('mood', $mood);
            return view($this->backendmusicPath . 'edit_music', $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'themes' => 'required',
                'tag' => 'required',
                'genres' => 'required',
                'moods' => 'required'
            ]);
            $data['name'] = $request->name;
            $id = $request->id;
            if ($request->hasFile('image')) {
                $this->delete_file($id);
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = storage_path('app/public/WebContent/images/music/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            if ($request->hasFile('audio')) {
                $this->delete_mp3($id);
                $audio = $request->file('audio');
                $name = time() . '.' . $audio->getClientOriginalExtension();
                $destinationPath = storage_path('app/public/WebContent/music/');
                $audio->move($destinationPath, $name);
                $data['audio'] = $name;
            }
            $data['artist_id'] = $request->artist;
            $find = Music::findorfail($id);
            $tags = $find->tags()->sync($request->tag);
            $themes = $find->themes()->sync($request->themes);
            $moods = $find->moods()->sync($request->moods);
            $genres = $find->genres()->sync($request->genres);

            if ($find->update($data)) {
                Session::flash('success', 'Music updated');
                return redirect()->back();
            }

        }
    }

    public function music_slider(Request $request)
    {
        if ($request->isMethod('get')) {
            $slide = MusicSlider::all();
            $this->data('slide', $slide);
            return view($this->backendmusicPath . 'music_slider', $this->data);
        }
        if ($request->isMethod('post')) {

            $request->validate([
                'image' => 'required',
            ]);
            $data['music_description'] = $request->description;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = storage_path('app/public/WebContent/images/sliders/musicpage/');
                $image->move($destinationPath, $name);
                $data['music_slider'] = $name;
            }

            $create = MusicSlider::create($data);

            if ($create) {
                Session::flash('success', 'Slider added successfully');
                return redirect()->back();
            }
        }
    }

    public function edit_slide(Request $request)
    {
        if ($request->isMethod('get')) {
            $id = $request->id;
            $edit = MusicSlider::where('id', '=', $id)->first();
            $this->data('slide', $edit);
            return view($this->backendmusicPath . 'edit_slide', $this->data);
        }
        if ($request->isMethod('post')) {
            $id = $request->id;
            $data['music_description'] = $request->description;
            if ($request->hasFile('image')) {
                $this->delete_slide($id);
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = storage_path('app/public/WebContent/images/sliders/musicpage/');
                $image->move($destinationPath, $name);
                $data['music_slider'] = $name;
            }
            $find = MusicSlider::findorfail($id);
            $update = $find->update($data);
            if ($update) {
                Session::flash('success', 'Slider updated successfully');
                return redirect()->back();
            }
        }
    }

    public function slider_delete($id)
    {
        $find = MusicSlider::findorfail($id);
        if ($this->delete_slide($id) && $find->delete()) {
            Session::flash('success', 'Slider deleted successfully');
            return redirect()->back();
        }
    }

    public function delete_slide($id)
    {
        $findData = MusicSlider::findorfail($id);
        $fileName = $findData->music_slider;
        $deletePath = storage_path('app/public/WebContent/images/sliders/musicpage/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }

    public function music_download($id)
    {
        $mus = Music::where('id', $id)->firstOrFail();
        $path = storage_path('app/public/WebContent/music/' . $mus->image);
        $headers = array(
            'Content-Type:audio/mp3',
        );
        return response()->download($path, $mus
            ->original_filename, $headers);
    }


    public function video(Request $request)
    {
        if ($request->isMethod('get')) {
            $tags = MusicTag::all();
            $this->data('tag', $tags);
            $theme = Theme::all();
            $this->data('theme', $theme);
            $genre = Genre::all();
            $this->data('genre', $genre);
            $mood = Mood::all();
            $this->data('mood', $mood);
            $art = Artist::all();
            $this->data('artist', $art);
            return view($this->backendmusicPath . 'video', $this->data);
        }

        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'image' => 'required',
                'themes' => 'required',
                'tag' => 'required',
                'genres' => 'required',
                'moods' => 'required',
                'video' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'errors' => $validator->errors()->all()
                ]);
            }
            $data['name'] = $request->name;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/video/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            if ($request->hasFile('video')) {
                $audio = $request->file('video');
                $file = time() . '.' . $audio->getClientOriginalExtension();
                $destinationPath = public_path('/video/');
                $audio->move($destinationPath, $file);
                $data['video'] = $file;
            }
            $data['artist_id'] = $request->artist;
            $create = Video::create($data);
            $taag = $create->tags()->attach($request->tag);
            $thems = $create->themes()->attach($request->themes);
            $gens = $create->genres()->attach($request->genres);
            $mod = $create->moods()->attach($request->moods);
        }

        if ($create) {
            return response()->json([
                'status' => 'success',
                'message' => 'Video uploaded'
            ]);
        }

    }

    public function show_video(Request $request)
    {
        if ($request->isMethod('get')) {
            $video = Video::all();
            $this->data('video', $video);
            return view($this->backendmusicPath . 'show_video', $this->data);
        }
    }

    public function edit_video(Request $request)
    {
        if ($request->isMethod('get')) {

            $video = Video::where('id', '=', $request->id)->first();
            $this->data('video', $video);
            $art = Artist::all();
            $this->data('artist', $art);
            $tag = MusicTag::all();
            $this->data('tag', $tag);
            $theme = Theme::all();
            $this->data('theme', $theme);
            $genre = Genre::all();
            $this->data('genre', $genre);
            $mood = Mood::all();
            $this->data('mood', $mood);
            return view($this->backendmusicPath . 'edit_video', $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'themes' => 'required',
                'tag' => 'required',
                'genres' => 'required',
                'moods' => 'required'
            ]);
            $data['name'] = $request->name;
            $id = $request->id;
            if ($request->hasFile('image')) {
                $this->delete_img($id);
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/video/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            if ($request->hasFile('video')) {
                $this->delete_video($id);
                $audio = $request->file('video');
                $name = time() . '.' . $audio->getClientOriginalExtension();
                $destinationPath = public_path('/video/');
                $audio->move($destinationPath, $name);
                $data['video'] = $name;
            }
            $data['artist_id'] = $request->artist;
            $find = Video::findorfail($id);
            $tags = $find->tags()->sync($request->tag);
            $themes = $find->themes()->sync($request->themes);
            $moods = $find->moods()->sync($request->moods);
            $genres = $find->genres()->sync($request->genres);

            if ($find->update($data)) {
                Session::flash('success', 'Video updated');
                return redirect()->back();
            }

        }
    }

    public function delete_img($id)
    {
        $findData = Video::findorfail($id);
        $fileName = $findData->image;
        $deletePath = public_path('images/video/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }

    public function delete_video($id)
    {
        $find = Video::findorfail($id);
        $file = $find->video;
        $deletePath = public_path('video/', $file);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }

    public function delete_videos(Request $request)
    {
        $id = $request->id;
        $find = Video::findorfail($id);
        if ($this->delete_img($id) && $this->delete_video($id) && $find->delete()) {
            Session::flash('success', 'Video deleted');
            return redirect()->back();
        }
    }


}


