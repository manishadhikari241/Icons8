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
                                      title="All questions related to our Fugue Music.">
                                        <span class="category-name">{{$value->categories->parent_id ? \App\Model\ForumCategory::where('id',1)->first()->name:''}}</span>&ensp;
                                        <span class="category-name">{{$value->categories->name}}</span>
                                    </span>
                            </a>
                        </td>

                        <td class="posters">
                            <a href="" class="">
                                <img alt="" width="25" height="25"
                                     src="https://community.icons8.com/letter_avatar_proxy/v2/letter/m/cab0a1/25.png"
                                     class="avatar" title="mediaattack22 - Original Poster">
                            </a>
                            <a href="" class="latest">
                                <img alt="" width="25" height="25"
                                     src="https://community.icons8.com/user_avatar/community.icons8.com/elenalo161/25/168_1.png"
                                     class="avatar latest" title="elenalo161 - Most Recent Poster">
                            </a>
                        </td>

                        <td class="num posts" title="This topic has 1 reply">
                            <a href="" class="badge-posts ">
                                <span class="number">1</span>
                            </a>
                        </td>

                        <td class="num views ">
                            <span class="number" title="this topic has been viewed 4 times">4</span></td>

                        <td class="num age "
                            title="First post: Jul 17, 2019 9:24 am Posted: Jul 17, 2019 10:13 am">
                            <a class="post-activity" href="">
                                <span class="relative-date">6h</span>
                            </a>
                        </td>
                    </tr>

                @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
