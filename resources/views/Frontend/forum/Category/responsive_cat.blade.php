@if($category->subCategory->isnotEmpty())
    @foreach($category->subCategory as $child)


        <li class="cat-filter category-link "cat_id="{{$child->id}}">
            @if(isset($parent))
                <a class="badge-wrapper box" href=""><span class="badge-category-bg"
                                                           style="background-color: #AB9364;"></span><span
                            style="color: #FFFFFF;" class="badge-category clear-badge"><span
                                class="category-name">{{$parent->name}}</span></span></a>
            @endif
            <a class="badge-wrapper box" href="javascript:void(0)"><span class="badge-category-bg"
                                                       style="background-color: #AB9364;"></span><span
                        style="color: #FFFFFF;" class="badge-category clear-badge"><span
                            class="category-name">{{$category->name}}</span></span></a>
            <a class="badge-wrapper box" href="javascript:void(0)"><span class="badge-category-bg"
                                                                              style="background-color: #AB9364;"></span><span
                        style="color: #FFFFFF;" class="badge-category clear-badge"><span
                            class="category-name">{{$child->name}}</span></span></a><b
                    class="topics-count">{{\App\Model\ForumTopic::where('category_id',$child->id)->first()?count(\App\Model\ForumTopic::where('category_id',$child->id)->get()):''}}</b>


        </li>
        @include('Frontend.forum.Category.responsive_cat',['category'=>$child,'parent'=>$category])

    @endforeach
@endif