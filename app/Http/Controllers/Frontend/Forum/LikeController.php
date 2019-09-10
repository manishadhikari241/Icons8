<?php

namespace App\Http\Controllers\Frontend\Forum;

use App\Model\CommentLike;
use App\Model\TopicLike;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like_topic(Request $request)
    {
        if ($request->ajax()) {
            if (!Auth::check()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Please Login to like'
                ]);
            }
            $find = TopicLike::where('topic_id', $request->topic_id)->where('user_id', Auth::user()->id)->first();
            if ($find) {
                $delete = TopicLike::where('topic_id', $request->topic_id)->where('user_id', Auth::user()->id)->delete();
                if ($delete) {
                    $topiclike = count(TopicLike::where('topic_id', $request->topic_id)->get());
                    return response()->json([
                        'status' => 'Unliked',
                        'Message' => 'Unliked',
                        'topic_id' => $topiclike,
                    ]);
                }
            }
            $create = TopicLike::create([
                'user_id' => Auth::user()->id,
                'topic_id' => $request->topic_id,
                'like' => 1
            ]);
            if ($create) {
                $topiclike = count(TopicLike::where('topic_id', $request->topic_id)->get());
                return response()->json([

                    'status' => 'success',
                    'message' => 'Liked',
                    'topic_id' => $topiclike
                ]);
            }
        }
        return false;
    }

    public function like_comment(Request $request)
    {
        if ($request->ajax()) {
            if (!Auth::check()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Please Login to like'
                ]);
            }
            $find = CommentLike::where('comment_id', $request->comment_id)->where('user_id', Auth::user()->id)->first();
            if ($find) {
                $delete = CommentLike::where('comment_id', $request->comment_id)->where('user_id', Auth::user()->id)->delete();
                if ($delete) {
                    $commentlike = count(CommentLike::where('comment_id', $request->comment_id)->get());
                    return response()->json([
                        'status' => 'Unliked',
                        'Message' => 'Unliked',
                        'comment_id' => $commentlike,
                    ]);
                }
            }
            $create = CommentLike::create([
                'user_id' => Auth::user()->id,
                'comment_id' => $request->comment_id,
                'like' => 1
            ]);
            if ($create) {
                $commentlike = count(CommentLike::where('comment_id', $request->comment_id)->get());
                return response()->json([

                    'status' => 'success',
                    'message' => 'Liked',
                    'comment_id' => $commentlike
                ]);
            }
        }
        return false;
    }

}
