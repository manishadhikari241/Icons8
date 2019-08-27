<div class="">
    <div class="w-100">
        <div id="list-area">
            <table class="topic-list">
                <thead>
                <tr>
                    <th class="default">Topic</th>
                    <th class="category ">Category</th>
                    <th class="posters">Users</th>
                    <th class="posts  num">Replies</th>
                    <th class="views  num">Views</th>
                    <th class="activity  num">Activity</th>
                </tr>
                </thead>
                <tbody>
                @foreach($forum as $value)
                    <tr class="topic-list-item">
                        <td class="main-link " colspan="1">
                                <span class="link-top-line">
                                    <a href="{{route('forum-inner',$value->id)}}"
                                       class="raw-link raw-topic-link">{{$value->topic}}</a>
                                    <span class="topic-post-badges"></span>
                                </span>
                        </td>

                        <td class="category">
                            <a class="badge-wrapper box" href="">
                                <span class="badge-category-bg" style="background-color: #AB9364;"></span>
                                <span style="color: #FFFFFF;" class="badge-category"
                                      title="All questions related to our {{$value->categories->parent_id ? \App\Model\ForumCategory::where('id',1)->first()->name:''}} {{$value->categories->name}}">
                                        <span class="category-name">{{$value->categories->parent_id ? \App\Model\ForumCategory::where('id',1)->first()->name:''}}</span>&ensp;
                                        <span class="category-name">{{$value->categories->name}}</span>
                                    </span>
                            </a>
                        </td>

                        <td class="posters">
                            @if(isset($value->users))
                                @foreach($value->users as $user)
                                    <a href="" class="">
                                        <img alt="" style="height: 25px;width: 25px"
                                             src="{{asset('storage/'.$user->avatar)}}"
                                             class="avatar" title="{{$user->name}}">
                                    </a>
                                    @if(\App\Model\TopicComments::where('topic_id',$value->id)->first())
                                        @foreach(\App\Model\TopicComments::where('topic_id',$value->id)->select('user_id')->distinct()->take(5)->get() as $key=>$comment)
                                            <a href="" class="">
                                                <img alt="" style="height: 25px;width: 25px"
                                                     src="{{asset('storage/'.\App\User::where('id',$comment->user_id)->first()->avatar)}}"
                                                     class="avatar"
                                                     title="{{\App\User::where('id',$comment->user_id)->first()->name}}">
                                            </a>
                                        @endforeach
                                    @endif

                                @endforeach
                            @endif
                            {{--@if (isset($value->comments))--}}
                            {{--@foreach(  $value->comments as $user)--}}
                            {{--{{$user->email}}--}}
                            {{--@endforeach--}}
                            {{--@endif--}}
                        </td>

                        <td class="num posts"
                            title="This topic has {{\App\Model\TopicComments::where('topic_id', $value->id)->get()->isnotEmpty()? count(\App\Model\TopicComments::where('topic_id', $value->id)->get()):'0'}} reply">
                            <a href="" class="badge-posts ">
                                <span class="number">{{\App\Model\TopicComments::where('topic_id', $value->id)->get()->isnotEmpty()? count(\App\Model\TopicComments::where('topic_id', $value->id)->get()):'0'}}</span>
                            </a>
                        </td>

                        <td class="num views ">
                            <span class="number" title="this topic has been viewed 4 times">{{$value->counts->first()?$value->counts->first()->count:''}}</span></td>

                        <td class="num age "
                            title="Posted: {{$value->created_at}}">
                            <a class="post-activity" href="">
                                <span class="relative-date">{{\App\Model\TopicComments::where('topic_id',$value->id)->first()?\Illuminate\Support\Carbon::parse(\App\Model\TopicComments::where('topic_id',$value->id)->latest()->first()->created_at)->diffForHumans():''}}</span>
                            </a>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
