<?php

namespace App\Http\Controllers\Frontend\Forum;

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
}
