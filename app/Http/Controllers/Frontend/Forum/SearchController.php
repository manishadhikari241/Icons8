<?php

namespace App\Http\Controllers\Frontend\Forum;

use App\Model\ForumTopic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function autosuggest(Request $request)
    {
        $query = $request->get('query');
        if (isset($query)) {
            $queryparam = explode(' ', $query);
        } else {
            $queryparam = null;
        }
        if (isset($queryparam)) {
            foreach ($queryparam as $queries) {
                $forumtopic = ForumTopic::join('forum_categories', 'forum_topics.category_id', '=', 'forum_categories.id')
                    ->where('topic', 'like', '%' . $queries . '%')
                    ->orWhere('forum_categories.name', 'like', '%' . $queries . '%');

            }
        }
        $forumtopic = $forumtopic
            ->select('forum_categories.name','forum_topics.description', 'forum_topics.topic', 'forum_topics.slug')
            ->take(4)
            ->get();

        return response()->json($forumtopic);
    }
}
