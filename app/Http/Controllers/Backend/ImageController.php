<?php

namespace App\Http\Controllers\Backend;

use App\Model\Age;
use App\Model\BodyType;
use App\Model\Credit;
use App\Model\Gender;
use App\Model\Hair;
use App\Model\Image;
use App\Model\ImageCategory;
use App\Model\Order;
use App\Model\OrderAssign;
use App\Model\OrderUpload;
use App\Model\PhotoLog;
use App\Model\Race;
use App\Model\SpecialFeature;
use App\Model\Tag;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use TCG\Voyager\Models\Role;

class ImageController extends BackendController
{
    public function categories(Request $request)
    {
        // General for all pages
        if ($request->isMethod('get')) {
            $cat = ImageCategory::all();
            $this->data('cat', $cat);
            return view($this->backendcategoryPath . 'category', compact('GeneralWebmasterSections'), $this->data);
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|unique:image_categories,title',
                'description' => 'required'
            ]);
            $data['title'] = $request->name;
            $data['description'] = $request->description;
            $data['status'] = $request->status;
            if (ImageCategory::create($data)) {
                Session::flash('success', 'Category added');
                return redirect()->back();
            }
        }
    }

    public function delete_category($id)
    {
        $find = ImageCategory::findorfail($id);
        if (DB::table('table_image_category')->where('category_id', $id)->get()->isNotEmpty()) {
            return redirect()->back()->with('error', 'Please delete related child category first');
        }
        if ($find->delete()) {
            Session::flash('success', 'Category deleted successfully');
            return redirect()->back();
        }
    }

    public function edit_category(Request $request)
    {
        if ($request->isMethod('get')) {
            $find = ImageCategory::where('id', '=', $request->id)->first();
            $this->data('find', $find);
            return view($this->backendcategoryPath . 'edit_category', $this->data);

        }

        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|unique:image_categories,title,' . $request->name,
                'description' => 'required'
            ]);
            $data['title'] = $request->name;
            $data['description'] = $request->description;
            $data['status'] = $request->status;

            $id = $request->id;
            $update = ImageCategory::findorfail($id);
            if ($update->update($data)) {
                return redirect()->back()->with('success', 'Category Updated');

            }
        }
    }

    public function genders(Request $request)
    {

        if ($request->isMethod('get')) {
            $gen = Gender::all();
            $this->data('gender', $gen);
            return view($this->backendgenderPath . 'gender', compact('GeneralWebmasterSections'), $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|unique:genders,name',
            ]);
            $data['name'] = $request->name;
            if (Gender::create($data)) {
                Session::flash('success', 'Gender added');
                return redirect()->back();
            }
        }
    }

    public function delete_gender($id)
    {
        $find = Gender::findorfail($id);
        if ($find->delete()) {
            Session::flash('success', 'Gender deleted');
            return redirect()->back();
        }
    }

    public function edit_gender(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|unique:genders,name' . $request->name,
            ]);
            $data['name'] = $request->name;
            $id = $request->id;
            $find = Gender::findorfail($id);
            if ($find->update($data)) {
                Session::flash('success', 'Gender updated');
                return redirect()->back();
            }
        }
    }

    public function races(Request $request)
    {

        if ($request->isMethod('get')) {
            $race = Race::all();
            $this->data('race', $race);
            return view($this->backendracePath . 'race', compact('GeneralWebmasterSections'), $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|unique:races,name'
            ]);
            $data['name'] = $request->name;
            if (Race::create($data)) {
                Session::flash('success', 'Race added');
                return redirect()->back();
            }
        }
    }

    public function delete_race($id)
    {
        $find = Race::findorfail($id);
        if ($find->delete()) {
            Session::flash('success', 'Race deleted');
            return redirect()->back();
        }
    }

    public function edit_race(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|unique:races,name' . $request->name,
            ]);
            $data['name'] = $request->name;
            $id = $request->id;
            $find = Race::findorfail($id);
            if ($find->update($data)) {
                Session::flash('success', 'Race updated');
                return redirect()->back();
            }
        }
    }

    public function ages(Request $request)
    {

        if ($request->isMethod('get')) {
            $age = Age::all();
            $this->data('age', $age);
            return view($this->backendagePath . 'age', compact('GeneralWebmasterSections'), $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|unique:ages,name',
            ]);
            $data['name'] = $request->name;
            if (Age::create($data)) {
                Session::flash('success', 'Gender added');
                return redirect()->back();
            }
        }
    }

    public function delete_age($id)
    {
        $find = Age::findorfail($id);
        if ($find->delete()) {
            Session::flash('success', 'Age deleted');
            return redirect()->back();
        }
    }

    public function edit_age(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required'
            ]);
            $data['name'] = $request->name;
            $id = $request->id;
            $find = Age::findorfail($id);
            if ($find->update($data)) {
                Session::flash('success', 'Age updated');
                return redirect()->back();
            }
        }
    }

    public function hairs(Request $request)
    {

        if ($request->isMethod('get')) {
            $hair = Hair::all();
            $this->data('hair', $hair);
            return view($this->backendhairPath . 'hair', compact('GeneralWebmasterSections'), $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|unique:hairs,name',
            ]);
            $data['name'] = $request->name;
            if (Hair::create($data)) {
                Session::flash('success', 'Hair added');
                return redirect()->back();
            }
        }
    }

    public function delete_hair($id)
    {
        $find = Hair::findorfail($id);
        if ($find->delete()) {
            Session::flash('success', 'Hair deleted');
            return redirect()->back();
        }
    }

    public function edit_hair(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required'
            ]);
            $data['name'] = $request->name;
            $id = $request->id;
            $find = Hair::findorfail($id);
            if ($find->update($data)) {
                Session::flash('success', 'Hair updated');
                return redirect()->back();
            }
        }
    }

    public function body_types(Request $request)
    {

        if ($request->isMethod('get')) {
            $body = BodyType::all();
            $this->data('body', $body);
            return view($this->backendbodytypePath . 'body_type', compact('GeneralWebmasterSections'), $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|unique:body_types,name',
            ]);
            $data['name'] = $request->name;
            if (BodyType::create($data)) {
                Session::flash('success', 'Body types added');
                return redirect()->back();
            }
        }
    }

    public function delete_body_types($id)
    {
        $find = BodyType::findorfail($id);
        if ($find->delete()) {
            Session::flash('success', 'Bodytype deleted');
            return redirect()->back();
        }
    }

    public function edit_body_types(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required'
            ]);
            $data['name'] = $request->name;
            $id = $request->id;
            $find = BodyType::findorfail($id);
            if ($find->update($data)) {
                Session::flash('success', 'Bodytype updated');
                return redirect()->back();
            }
        }
    }

    public function special_features(Request $request)
    {
        if ($request->isMethod('get')) {
            $special = SpecialFeature::all();
            $this->data('special', $special);
            return view($this->backendspecialPath . 'special_features', compact('GeneralWebmasterSections'), $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|unique:special_features,name',
            ]);
            $data['name'] = $request->name;
            if (SpecialFeature::create($data)) {
                Session::flash('success', 'Body types added');
                return redirect()->back();
            }
        }
    }

    public function delete_special_features($id)
    {
        $find = SpecialFeature::findorfail($id);
        if ($find->delete()) {
            Session::flash('success', 'Special features deleted');
            return redirect()->back();
        }
    }

    public function edit_special_features(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required'
            ]);
            $data['name'] = $request->name;
            $id = $request->id;
            $find = SpecialFeature::findorfail($id);
            if ($find->update($data)) {
                Session::flash('success', 'Special features updated');
                return redirect()->back();
            }
        }
    }

    public function tags(Request $request)
    {

        if ($request->isMethod('get')) {
            $tags = Tag::all();
            $this->data('tags', $tags);
            return view($this->backendtagPath . 'tags', compact('GeneralWebmasterSections'), $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|unique:tags,name',
            ]);
            $data['name'] = $request->name;
            if (Tag::create($data)) {
                Session::flash('success', 'Tags added');
                return redirect()->back();
            }
        }
    }

    public function delete_tags($id)
    {
        $find = Tag::findorfail($id);
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
            $find = Tag::findorfail($id);
            if ($find->update($data)) {
                Session::flash('success', 'Tag updated');
                return redirect()->back();
            }
        }
    }

    public function credits(Request $request)
    {

        if ($request->isMethod('get')) {
            $credits = Credit::all();
            $this->data('credit', $credits);
            return view($this->backendcreditPath . 'credits', compact('GeneralWebmasterSections'), $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'photographer' => 'required',
                'model' => 'required'
            ]);
            $data['photographer'] = $request->photographer;
            $data['model'] = $request->model;
            $create = Credit::create($data);
            if ($create) {
                Session::flash('success', 'Image credits uploaded');
                return redirect()->back();
            }
        }
    }

    public function edit_credits(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'photographer' => 'required',
                'model' => 'required'
            ]);
            $id = $request->id;
            $find = Credit::findorfail($id);
            $data['photographer'] = $request->photographer;
            $data['model'] = $request->model;
            if ($find->update($data)) {
                Session::flash('success', 'Image credits updated');
                return redirect()->back();
            }
        }
    }

    public function delete_credits($id)
    {
        $find = Credit::findorfail($id);
        if ($find->delete()) {
            Session::flash('success', 'Image credits deleted');
            return redirect()->back();
        }
    }


    public function image_upload(Request $request)
    {
        if ($request->isMethod('get')) {

            $upload = Image::all();
            $this->data('photos', $upload);
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
            $spe = SpecialFeature::all();
            $this->data('special', $spe);
            $tags = Tag::all();
            $this->data('tag', $tags);
            $cat = ImageCategory::where('status', '=', 1)->get();
            $this->data('cat', $cat);
            $credit = Credit::all();
            $this->data('credits', $credit);
            $user = User::where('role_id', '!=', 2)->get();
            $this->data('user', $user);
            return view($this->backendimagePath . 'image', $this->data);
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'uploader' => 'required',
                'license' => 'required',
                'image_type' => 'required',
                'description' => 'required',
                'image' => 'required',
                'tags' => 'required',
                'category' => 'required'
            ]);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/photo_upload/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            $data['title'] = $request->name;
            $data['user_id'] = $request->uploader;
            $data['license'] = $request->license;
            $data['image_type'] = $request->image_type;
            $data['description'] = $request->description;
            $data['status'] = $request->status;
            $data['is_new'] = $request->is_new;
            $data['is_rising'] = $request->is_rising;
            $data['is_top'] = $request->is_top;
            $data['cost'] = $request->price;
            $create = Image::create($data);
            $last_id = $create->id;
            foreach ($request->category as $value) {
                $cat = DB::table('table_image_category')->insert(['image_id' => $last_id, 'category_id' => $value]);
            }
            foreach ($request->gender as $value) {
                $gen = DB::table('table_image_gender')->insert(['image_id' => $last_id, 'gender_id' => $value]);
            }
            foreach ($request->age as $value) {
                $age = DB::table('table_image_age')->insert(['image_id' => $last_id, 'age_id' => $value]);
            }
            foreach ($request->race as $value) {
                $race = DB::table('table_image_race')->insert(['image_id' => $last_id, 'race_id' => $value]);
            }
            foreach ($request->hair as $value) {
                $hair = DB::table('table_image_hair')->insert(['image_id' => $last_id, 'hair_id' => $value]);
            }
            foreach ($request->body_type as $value) {
                $body = DB::table('table_image_body_type')->insert(['image_id' => $last_id, 'body_id' => $value]);
            }
            foreach ($request->special_feature as $value) {
                $special = DB::table('table_image_special_feature')->insert(['image_id' => $last_id, 'special_id' => $value]);
            }
            foreach ($request->tags as $value) {
                $table = DB::table('image_tags')->insert(['image_id' => $last_id, 'tag_id' => $value]);
            }
            foreach ($request->photographer as $value) {
                $photographer = DB::table('image_photographer')->insert(['image_id' => $last_id, 'photographer_id' => $value]);
            }
            foreach ($request->model as $value) {
                $model = DB::table('image_models')->insert(['image_id' => $last_id, 'model_id' => $value]);
            }
            if ($create) {
                Session::flash('success', 'Image uploaded');
                return redirect()->back();
            }

        }
    }

    public function show_image(Request $request)
    {
        if ($request->isMethod('get')) {

            $image = Image::all();
            $this->data('image', $image);
            return view($this->backendimagePath . 'show_image', compact('GeneralWebmasterSections'), $this->data);

        }
    }

    public function edit_image(Request $request)
    {
        if ($request->isMethod('get')) {
            $img = Image::where('id', '=', $request->id)->first();
            $this->data('img', $img);
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
            $spe = SpecialFeature::all();
            $this->data('special', $spe);
            $tags = Tag::all();
            $this->data('tag', $tags);
            $cat = ImageCategory::all();
            $this->data('cat', $cat);
            $credit = Credit::all();
            $this->data('credits', $credit);
            $user = User::where('role_id', '!=', 2)->get();
            $this->data('user', $user);
            return view($this->backendimagePath . 'edit_image', $this->data);

        }

        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'uploader' => 'required',
                'license' => 'required',
                'image_type' => 'required',
                'description' => 'required',
                'tags' => 'required'
            ]);
            $id = $request->id;
            if ($request->hasFile('image')) {
                $this->delete_file($id);
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/photo_upload/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            $data['title'] = $request->name;
            $data['user_id'] = $request->uploader;
            $data['license'] = $request->license;
            $data['image_type'] = $request->image_type;
            $data['description'] = $request->description;
            $data['status'] = $request->status;
            $data['is_new'] = $request->is_new;
            $data['is_rising'] = $request->is_rising;
            $data['is_top'] = $request->is_top;
            $data['cost'] = $request->price;
            $edit = Image::findorfail($id);
            $pivot = $edit->tags()->sync($request->tags);
            $cat = $edit->categories()->sync($request->category);
            $gen = $edit->genders()->sync($request->gender);
            $age = $edit->ages()->sync($request->age);
            $race = $edit->races()->sync($request->race);
            $hair = $edit->hairs()->sync($request->hair);
            $body = $edit->bodytypes()->sync($request->body_type);
            $special = $edit->specials()->sync($request->special_feature);
            $photo = $edit->photos()->sync($request->photographer);
            $model = $edit->models()->sync($request->model);

            $update = $edit->update($data);
            if ($update) {
                Session::flash('success', 'Image updated');
                return redirect()->back();
            }
        }
        return false;
    }

    public function delete_file($id)
    {
        $findData = Image::findorfail($id);
        $fileName = $findData->image;
        $deletePath = public_path('images/photo_upload/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }

    public function delete_image($id)
    {
        $find = Image::findorfail($id);
        if ($this->delete_file($id) && $find->delete()) {
            Session::flash('success', 'Image deleted');
            return redirect()->back();
        }
    }

    public function show_orders(Request $request)
    {
        if ($request->isMethod('get')) {

            $upload = OrderUpload::all();
//            $unique = $order->unique('user_id');
            $this->data('upload', $upload);
            $order = Order::all();
            $this->data('order', $order);
            return view($this->backendimagePath . 'image_orders', $this->data);

        }
    }

    public function image_details(Request $request)
    {
        if ($request->isMethod('get')) {
            $id = $request->id;
            $img = User::where('id', '=', $id)->first()->images;
            $this->data('img', $img);
            return view($this->backendimagePath . 'view_photos', $this->data);

        }
    }

    public function latest_orders(Request $request)
    {
        if ($request->isMethod('get')) {
            $order = Order::all();
            $this->data('order', $order);
            $user = User::where('role_id', '!=', 2)->get();

            $this->data('users', $user);
            return view($this->backendimagePath . 'latest_orders', $this->data);
        }
    }

    public function order_status(Request $request)
    {
        $id = $request->id;
        $assign = Order::findorfail($id);
        if ($_POST['status'] == 0) {
            $assign->status = 0;
        }
        if ($_POST['status'] == 1) {
            $assign->status = 1;
        }
        if ($_POST['status'] == 2) {
            $assign->status = 2;
        }
        $save = $assign->update();
        if ($save) {
            Session::flash('success', 'Order status changed');
            return redirect()->back();
        }
    }

    public function assign_status(Request $request)
    {
        $id = $request->id;
        $assign = OrderAssign::findorfail($id);
        if ($_POST['status'] == 0) {
            $assign->status = 0;
        }
        if ($_POST['status'] == 1) {
            $assign->status = 1;
        }
        if ($_POST['status'] == 2) {
            $assign->status = 2;
        }
        $save = $assign->update();
        if ($save) {
            Session::flash('success', 'Assignment status changed');
            return redirect()->back();
        }

    }

    public function delete_order(Request $request)
    {
        $id = $request->id;
        $find = Order::findorfail($id);
        if ($find->delete()) {
            Session::flash('success', 'Order deleted successfully');
            return redirect()->back();
        }
    }

    public function order_assign(Request $request)
    {
        if ($request->ajax()) {
            $data['user_id'] = $request->user_id;
            $data['order_id'] = $request->order_id;
            $data['status'] = 0;

            if ($request->user_id == 0) {
                $find = OrderAssign::where('order_id', $request->order_id)->first()->users->name;
                $remove = OrderAssign::where('order_id', $request->order_id)->delete();
                if ($remove) {

                    $logs = PhotoLog::create([
                        'type' => 'Cancelled',
                        'description' => 'Order Assignment Removed from ' . $find,
                        'user_id' => null,
                        'ip_address' => $_SERVER['REMOTE_ADDR'],
                        'order_id' => $request->order_id
                    ]);
                    return response()->json([
                        'message' => 'Assignment Removed'
                    ]);
                }
            }

            if (OrderAssign::where('order_id', $request->order_id)->where('user_id', '!=', $request->user_id)) {
                $var = OrderAssign::where('order_id', $request->order_id)->where('user_id', '!=', $request->user_id)
                    ->update($data);
                if ($var) {
                    $logs = PhotoLog::create([
                        'type' => Role::where('id', \TCG\Voyager\Models\User::where('id', $request->user_id)->first()->role_id)->first()->name,
                        'description' => 'Order Assigned to ' . \TCG\Voyager\Models\User::where('id', $request->user_id)->first()->name,
                        'user_id' => $request->user_id,
                        'ip_address' => $_SERVER['REMOTE_ADDR'],
                        'order_id' => $request->order_id
                    ]);
                    return response()->json([
                        'message' => 'Assignment changed'
                    ]);
                }
            }
            $create = OrderAssign::updateorcreate(['order_id' => $request->order_id], $data);
            if ($create) {
                $logs = PhotoLog::create([
                    'type' => Role::where('id', \TCG\Voyager\Models\User::where('id', $request->user_id)->first()->role_id)->first()->name,
                    'description' => 'Order Assigned to ' . \TCG\Voyager\Models\User::where('id', $request->user_id)->first()->name,
                    'user_id' => $request->user_id,
                    'ip_address' => $_SERVER['REMOTE_ADDR'],
                    'order_id' => $request->order_id
                ]);
                return response()->json([
                    'message' => 'Order assigned succesfully'
                ]);
            }
        }
        if ($request->isMethod('get')) {
            if (Auth::user()->role_id != 1) {
                $assign = OrderAssign::where('user_id', '=', Auth::user()->id)->get();
            } else {
                $assign = OrderAssign::all();
            }
            $this->data('order', $assign);
            return view($this->backendimagePath . 'order_assign', $this->data);
        }
    }

    public function assign_delete(Request $request)
    {
        $id = $request->id;
        $find = OrderAssign::findorfail($id);
        if ($find->delete()) {
            Session::flash('success', 'Assigment deleted');
            return redirect()->back();
        }
    }

    public function image_modal($id)
    {
        $image = Order::where('id', '=', $id)->first();
        $this->data('image', $image);
        return view($this->backendimagePath . 'image_modal', $this->data);
    }

    public function order_upload(Request $request)
    {
        if ($request->isMethod('get')) {
            $upload = OrderUpload::all();
            $this->data('upload', $upload);
            $order = Order::where('status', '=', 1)->get();
            $this->data('order', $order);
            return view($this->backendimagePath . 'order_upload', $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'image' => 'required',
            ]);
            $data['message'] = $request->message;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/order_upload/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            $data['order_id'] = $request->order_id;
            if (OrderUpload::create($data)) {
                $order = Order::where('id', '=', $request->order_id)->update(['status' => 2]);
                $assign = OrderAssign::where('order_id', '=', $request->order_id)->update(['status' => 2]);
                Session::flash('success', 'Order uploaded successfully');
                return redirect()->back();
            }
        }
    }

    public function show_order(Request $request)
    {
        if ($request->isMethod('get')) {
            $upload = OrderUpload::join('orders', 'orders.id', '=', 'order_uploads.order_id')->where('orders.user_id', '=', Auth::user()->id)->get();
            $this->data('upload', $upload);
            return view($this->backendimagePath . 'show_orders', $this->data);
        }
    }

    public function order_download($id)
    {
        $img = OrderUpload::where('id', $id)->firstOrFail();
        $path = public_path('images/order_upload/' . $img->image);
        $headers = array(
            'Content-Type:image/jpeg',
        );
        return response()->download($path, $img
            ->original_filename, $headers);
    }

    public function upload_delete($id)
    {
        $find = OrderUpload::findorfail($id);
        if ($find->delete()) {
            Session::flash('success', 'Upload deleted');
            return redirect()->back();
        }
    }

    public function order_invoice(Request $request)
    {
        $id = $request->id;
        $order = OrderUpload::where('order_id', '=', $id)->first();
        $this->data('order', $order);
        return view($this->backendimagePath . 'invoice', $this->data);
    }
    public function image_log(Request $request)
    {
        if ($request->isMethod('get')) {
            $photolog = PhotoLog::latest()->get();
            $this->data('logs', $photolog);
            return view($this->backendimagePath . 'logs', $this->data);
        }
        if ($request->isMethod('post')) {
            $validator= Validator::make($request->all(),[
               'delete'=>'required'
            ],['delete.required'=>'Please Select'])->validate();
            $log_delete = PhotoLog::whereIn('id', $request->delete)->delete();
            if ($log_delete) {
                return redirect()->back()->with('success', 'Logs Deleted');
            }
        }
        return false;
    }
}



