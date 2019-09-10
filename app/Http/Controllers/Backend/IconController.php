<?php

namespace App\Http\Controllers\Backend;

use App\Model\IconCategory;
use App\Model\IconStyle;
use App\Model\IconTrend;
use App\Model\IconUpload;
use App\Model\Tag;
use App\Repositories\Contracts\StyleRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WebmasterSection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class IconController extends BackendController
{
    private $style;

    public function __construct(StyleRepository $style)
    {
        parent::__construct();
        $this->style = $style;
    }

    public function icon_style(Request $request)
    {

        if ($request->isMethod('get')) {
            $style = IconStyle::all();
            $this->data('styles', $style);
            return view($this->backendiconPath . 'styles', $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'parent_id' => 'required',
                'description' => 'required',
                'image' => 'required'
            ]);
            $data['name'] = $request->name;
            $data['parent_id'] = $request->parent_id;
            $data['description'] = $request->description;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/icons/styles/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            if (IconStyle::create($data)) {
                Session::flash('success', 'Icon styles added');
                return redirect()->back();
            }
        }
    }

    public function edit_icon_style(Request $request)
    {
        if ($request->isMethod('get')) {
            $id = IconStyle::where('id', '=', $request->id)->first();
            $this->data('style', $id);
            $all = IconStyle::all();
            $this->data('parent', $all);
            return view($this->backendiconPath . 'edit_icon_style',$this->data);

        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'parent_id' => 'required',
                'description' => 'required',
            ]);
            $data['name'] = $request->name;
            $data['parent_id'] = $request->parent_id;
            $data['description'] = $request->description;
            $id = $request->id;
            if ($request->hasFile('image')) {
                $this->delete_img($id);
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/icons/styles/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            $find = IconStyle::findorfail($id);
            if ($find->update($data)) {
                Session::flash('success', 'Icon style updated');
                return redirect()->back();
            }

        }
    }

    public function delete_img($id)
    {
        $findData = IconStyle::findorfail($id);
        $fileName = $findData->image;
        $deletePath = public_path('images/icons/styles/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }

    public function delete_icon_style($id)
    {
        $del = IconStyle::findorfail($id);
        if (DB::table('icon_styles')->where('parent_id', $id)->get()->isNotEmpty()) {
            return redirect()->back()->with('error', 'Please delete related child category first');
        }
        if ($this->delete_img($id) && $del->delete()) {
            Session::flash('success', 'Icon styles deleted');
            return redirect()->back();
        }
    }

    public function category(Request $request)
    {
        // General for all pages

        if ($request->isMethod('get')) {
            $cat = IconCategory::all();
            $this->data('cat', $cat);

            return view($this->backendiconPath . 'category', $this->data);


        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'image' => 'required',
                'description' => 'required'
            ]);
            $data['title'] = $request->name;
            $data['description'] = $request->description;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/icons/category/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            if (IconCategory::create($data)) {
                Session::flash('success', 'Icon Category added');
                return redirect()->back();
            }
        }

    }

    public function edit_icon_category(Request $request)
    {
        if ($request->isMethod('get')) {
            $id = IconCategory::where('id', '=', $request->id)->first();
            $this->data('icon', $id);

            return view($this->backendiconPath . 'edit_icon_category', $this->data);

        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'description' => 'required'
            ]);
            $id = $request->id;
            $data['title'] = $request->name;
            $data['description'] = $request->description;
            if ($request->hasFile('image')) {
                $this->delete_file($id);
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/icons/category/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            $find = IconCategory::findorfail($id);
            if ($find->update($data)) {
                Session::flash('success', 'Category updated');
                return redirect()->back();
            }
        }
    }

    public function delete_file($id)
    {
        $findData = IconCategory::findorfail($id);
        $fileName = $findData->image;
        $deletePath = public_path('images/icons/category/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }

    public function delete_icon_category($id)
    {
        $find = IconCategory::findorfail($id);
        if ($this->delete_file($id) && $find->delete()) {
            Session::flash('success', 'Category deleted');
            return redirect()->back();
        }
    }

    public function icon_trend(Request $request)
    {

        if ($request->isMethod('get')) {
            $trend = IconTrend::all();
            $this->data('trend', $trend);

            return view($this->backendiconPath . 'trends',  $this->data);



        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'image' => 'required',
                'description' => 'required'
            ]);
            $data['category'] = $request->name;
            $data['description'] = $request->description;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/icons/trends/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            if (IconTrend::create($data)) {
                Session::flash('success', 'Icon trend added');
                return redirect()->back();
            }
        }
    }

    public function edit_icon_trend(Request $request)
    {
        if ($request->isMethod('get')) {
            $id = IconTrend::where('id', '=', $request->id)->first();
            $this->data('trend', $id);
            return view($this->backendiconPath . 'edit_icon_trend', $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'description' => 'required'
            ]);
            $data['category'] = $request->name;
            $data['description'] = $request->description;
            $id = $request->id;
            if ($request->hasFile('image')) {
                $this->delete_image($id);
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/icons/trends/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            $edit = IconTrend::findorfail($id);
            if ($edit->update($data)) {
                Session::flash('success', 'Icon trend updated');
                return redirect()->back();
            }
        }
    }

    public function delete_image($id)
    {
        $findData = IconTrend::findorfail($id);
        $fileName = $findData->image;
        $deletePath = public_path('images/icons/trends/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }

    public function delete_icon_trend($id)
    {
        $find = IconTrend::findorfail($id);
        if ($this->delete_image($id) && $find->delete()) {
            Session::flash('success', 'Icon trend deleted');
            return redirect()->back();
        }
    }

    public function icon_upload(Request $request)
    {

        if ($request->isMethod('get')) {
            $icon = IconUpload::all();
            $this->data('icon', $icon);
            $tags = Tag::all();
            $this->data('tag', $tags);
            $trend = IconTrend::all();
            $this->data('trend', $trend);
            $cat = IconCategory::all();
            $this->data('cat', $cat);
            $style = IconStyle::all();
            $this->data('style', $style);

            return view($this->backendiconPath . 'icon_upload', $this->data);

        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                'image' => 'required',
                'trends' => 'required',
                'categories' => 'required',
                'styles' => 'required'
            ]);
            $data['name'] = $request->name;
            $data['description'] = $request->description;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/icons/icon_upload/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            $insert = IconUpload::create($data);
            $id = $insert->id;

//            foreach ($request->tags as $value) {
//                $tag = DB::table('icons_tags_pivot')->insert(['icon_id' => $id, 'tag_id' => $value]);
//            }
            foreach ($request->trends as $value) {
                $trend = DB::table('icons_trend')->insert(['icon_id' => $id, 'trend_id' => $value]);
            }
            foreach ($request->categories as $value) {
                $cat = DB::table('icons_category')->insert(['icon_id' => $id, 'category_id' => $value]);
            }
            foreach ($request->styles as $value) {
                $style = DB::table('icons_style')->insert(['icon_id' => $id, 'style_id' => $value]);
            }
            if ($insert) {
                Session::flash('success', 'Icon uploaded');
                return redirect()->back();
            }

        }
    }

    public function show_icon(Request $request)
    {
        if ($request->isMethod('get')) {

            $icon = IconUpload::all();
            $this->data('icon', $icon);
            return view($this->backendiconPath . 'show_icons', $this->data);

        }
    }

    public function edit_icon_upload(Request $request)
    {

        if ($request->isMethod('get')) {
            $id = IconUpload::where('id', '=', $request->id)->first();
            $this->data('icon', $id);
            $tags = Tag::all();
            $this->data('tag', $tags);
            $trend = IconTrend::all();
            $this->data('trend', $trend);
            $cat = IconCategory::all();
            $this->data('cat', $cat);
            $style = IconStyle::all();
            $this->data('style', $style);

            return view($this->backendiconPath . 'edit_icon_upload', $this->data);


        }

        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                'trends' => 'required',
                'categories' => 'required',
                'styles' => 'required'
            ]);
            $data['name'] = $request->name;
            $data['description'] = $request->description;
            $id = $request->id;
            if ($request->hasFile('image')) {
                $this->delete_icon($id);
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/icons/icon_upload/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            $find = IconUpload::findorfail($id);
//            $pivot = $find->tags()->sync($request->tags);
            $trend = $find->trends()->sync($request->trends);
            $catt = $find->categories()->sync($request->categories);
            $style = $find->styles()->sync($request->styles);

            $update = $find->update($data);
            if ($update) {
                Session::flash('success', 'Icon updated');
                return redirect()->back();
            }
        }
    }

    public function delete_icon($id)
    {
        $findData = IconUpload::findorfail($id);
        $fileName = $findData->image;
        $deletePath = public_path('images/icons/icon_upload/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }

    public function delete_icon_upload($id)
    {
        $del=IconUpload::findorfail($id);
        if ($this->delete_icon($id) && $del->delete())
        {
            Session::flash('success', 'Icon deleted');
            return redirect()->back();
        }
    }

    public function getCategory(){
        $categories = IconStyle::where('parent_id', 0)->take(12)->get();
        $categories = $this->addRelation($categories);
        return $categories;
    }
    public function addRelation($categories)
    {

        $categories->map(function ($item, $key) {

//            dd($item);
            $sub = $this->selectChild($item->id);

            return $item = array_add($item, 'subCategory', $sub);


        });

        return $categories;
    }
    public function selectChild($id)
    {
        $categories = IconStyle::where('parent_id', $id)->get(); //rooney

        $categories = $this->addRelation($categories);

        return $categories;

    }
}
