<?php

namespace App\Http\Controllers\Backend;

use App\Model\TopicComments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return false;
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

    public function topic_status(Request $request)
    {
        $update = ForumTopic::findorfail($request->status);

        if (isset($_POST['active'])) {
            $update->status = 0;
        }
        if (isset($_POST['inactive'])) {
            $update->status = 1;
        }
        $save = $update->update();
        if ($save) {

            return redirect()->back()->with('success', 'Status Updated');
        }
        return false;
    }

    public function delete_topic(Request $request)
    {
        $delete = ForumTopic::findorfail($request->id)->delete();
        if ($delete) {
            return redirect()->back()->with('success', 'Topics Deleted');
        }
        return false;
    }

    public function show_topic(Request $request)
    {
        $forum = ForumTopic::where('status', 1)->where('slug', $request->slug)->first();
        $this->data('forum', $forum);
        $comment = TopicComments::where('topic_id', $forum->id)->get();
        $replycount = count($comment);
        $this->data('reply', $replycount);
        $lastreply = TopicComments::where('topic_id', $forum->id)->latest()->first() ? TopicComments::where('topic_id', $forum->id)->latest()->first()->created_at : '';
        $this->data('lastreply', $lastreply);
        $this->data('comment', $comment);
        return view('Frontend.forum.forum-inner', $this->data);

    }
}
