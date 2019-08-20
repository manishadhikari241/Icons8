<?php

namespace App\Http\Controllers\Frontend\Forum;

use App\Model\TopicComments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TopicCommentController extends Controller
{
    public function comment(Request $request)
    {
        if ($request->ajax()) {

            if (!Auth::check()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Please login to comment'
                ]);
            }
            $validator = Validator::make($request->all(), [
                'comment' => 'required'
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'errors' => $validator->errors()->all()
                ]);
            }
            $data['topic_id'] = $request->topic_id;
            $data['comment'] = $request->comment;
            $data['user_id'] = Auth::user()->id;

            $insert = TopicComments::create($data);

            if ($insert) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Your Comment has been posted'
                ]);
            }
        }
        return false;
    }

}
