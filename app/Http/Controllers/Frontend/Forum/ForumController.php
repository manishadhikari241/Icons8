<?php

namespace App\Http\Controllers\Frontend\forum;

use App\Model\TopicComments;
use App\Model\TopicVisit;
use App\User;
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
                'detail' => 'required|min:2|max:5000',

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
        $forum = ForumTopic::where('status', 1)->where('slug', $request->slug)->first();
//        dd($forum);
        $check = TopicVisit::where('topic_id', $forum->id)->first();
        if (!$check) {
            $viewcount = TopicVisit::updateorcreate(['topic_id' => $forum->id], [
                'topic_id' => $forum->id,
                'ip_address' => $_SERVER['REMOTE_ADDR'],
                'count' => 1
            ]);
        }
        if (!Session::has('ip')) {
            $check2 = TopicVisit::where('topic_id', $forum->id)->first();
            if ($check2) {
                $update = TopicVisit::where('topic_id', $forum->id)->where('ip_address', $_SERVER['REMOTE_ADDR'])
                    ->update(['count' => $check2->count + 1]);

            }
        }
        Session::put('ip', $_SERVER['REMOTE_ADDR']);


        $this->data('forum', $forum);
        $comment = TopicComments::where('topic_id', $forum->id)->get();
        $replycount = count($comment);
        $this->data('reply', $replycount);
        $lastreply = TopicComments::where('topic_id', $forum->id)->latest()->first() ? TopicComments::where('topic_id', $forum->id)->latest()->first()->created_at : null;
        foreach ($comment as $value) {
            $user_id[] = $value->users->id;
        }
        foreach ($comment as $value) {
            $user_avatar[] = $value->users->id;
        }
        if (isset($user_avatar)) {
            $user_av = array_unique($user_avatar);
            $user_commented = User::whereIn('id', $user_av)->take(20)->get();
            $this->data('user_commented', $user_commented);
        }
        if (isset($user_id)) {
            $totaluser = count(array_unique($user_id));
            $this->data('total_user', $totaluser);
        }

        $this->data('lastreply', $lastreply);
        $this->data('comment', $comment);

        $suggested = ForumTopic::where('category_id', $forum->category_id)->where('status',1)->where('id', '!=', $forum->id)->get();
        $this->data('suggested', $suggested);
        return view('Frontend.forum.forum-inner', $this->data);
    }

    public function latest_filter(Request $request)
    {
        if ($request->ajax()) {
            $forum = ForumTopic::where('status', 1)->latest();
            $category_id = Session::get('category_id');


            if (Session::has('category_id')) {
                $forum->where('category_id', $category_id);
            }

            $final = $forum->get();
//Session::forget('category_id');
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

    public function topic_filter(Request $request)
    {
        if ($request->ajax()) {
            $forum = ForumTopic::withCount('comments')
                ->where('status',1)
                ->orderBy('comments_count', 'desc');

            $final = $forum->get();
            /* another method
             *          $forum = ForumTopic::with('comments')
                ->get()->sortBy(function ($forum) {
                    return $forum->comments->count();
                },$options=SORT_REGULAR,true);

            $final = $forum;
             * */

            $this->data('forum', $final);
            return view('Frontend.forum.latest_filter', $this->data);
        }

        return false;
    }


}
