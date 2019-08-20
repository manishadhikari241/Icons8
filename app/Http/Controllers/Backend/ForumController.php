<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WebmasterSection;
use App\Repositories\Contracts\ForumCategoryRepository;
use App\Model\ForumCategory;
use App\Model\ForumTopic;

class ForumController extends BackendController
{
    private $category;

    public function __construct(ForumCategoryRepository $category)
    {
        parent::__construct();
        $this->category = $category;
    }

    public function add_category_forum(Request $request)
    {
        if ($request->isMethod('get')) {
            $cat = ForumCategory::all();

            return view($this->backendPagePath . 'Forum.Category.add_category', compact('GeneralWebmasterSections', 'cat'));
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|min:2',
                'description' => 'required|min:2|max:200'
            ]);
            $data['name'] = $request->name;
            $data['parent_id'] = $request->parent_id;
            $data['description'] = $request->description;

            $create = ForumCategory::create($data);
            if ($create) {
                return redirect()->back()->with('success', 'Categories Added');
            }
        }
    }

    public function all_topics(Request $request)
    {
        if ($request->isMethod('get')) {
            $forum = ForumTopic::all();
            $this->data('forum', $forum);
            return view($this->backendPagePath . 'Forum.Topic.All_Topics', $this->data);
        }
        return false;
    }
}
