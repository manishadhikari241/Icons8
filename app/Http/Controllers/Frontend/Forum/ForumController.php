<?php

namespace App\Http\Controllers\Frontend\forum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ForumTopic;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ForumController extends Controller
{
    public function index()
    {
        $forum = ForumTopic::where('status', '=', 1)->get();
        $this->data('forum', $forum);
        return view('Frontend.forum.index', $this->data);
    }

    public function new_topic(Request $request)
    {
        if ($request->ajax()) {

            if (!Auth::check()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Please login to continue'
                ]);
            }
            $validator = Validator::make($request->all(), [
                'category' => 'required',
                'title' => 'required|min:3|max:200',
                'detail' => 'required|min:2|max:500',

            ], ['category.required' => 'Please choose Category', 'detail.requires' => 'please provide description']);

            if ($validator->fails()) {
                return response()->json([
                    'errors' => $validator->errors()->all()
                ]);
            }
            $data['topic'] = $request->title;
            $data['category_id'] = $request->category;
            $data['description'] = $request->detail;

            $create = ForumTopic::create($data);
            $create->users()->attach(Auth::user()->id);
            if ($create) {
                {
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Your Topic has been Requested'
                    ]);
                }
            }
            return true;

        }


        return false;
    }

    public function forum_inner(Request $request)
    {
        $forum = ForumTopic::where('status', 1)->where('id', $request->id)->first();
        $this->data('forum', $forum);
        return view('Frontend.forum.forum-inner', $this->data);
    }

    public function topic_filter(Request $request)
    {
        if ($request->ajax()) {
            $forum = ForumTopic::where('status', 1)->latest();
            $category_id = Session::get('category_id');


            if (Session::has('category_id')) {
                $forum->where('category_id', $category_id);
            }

            $final = $forum->get();

            $this->data('forum', $final);
            return view('Frontend.forum.latest_filter', $this->data);
        }

        return false;
    }

    public function category_filter(Request $request)
    {
        if ($request->ajax()) {
            Session::put('category_id', $request->category_id);

            $topic = ForumTopic::where('category_id', $request->category_id)->where('status', 1)->get();
            $this->data('topic', $topic);
            return view('Frontend.forum.category_filter', $this->data);
        }

        return false;
    }

}
