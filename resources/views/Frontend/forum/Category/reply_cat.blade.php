@if($category->subCategory->isNotEmpty())
    @foreach($category->subCategory as $child)
        <li class="select-kit-row category-row is-highlighted " cat_id="{{$child->id}}">
            <div class="category-status">
                @if(isset($parent) && $parent != '')
                    <span class="badge-wrapper box">
                                <span class="badge-category-bg" style="background-color: #AB9364;"></span>
                                <span style="color: #FFFFFF;" class="badge-category ">
                                    <span value="aa" cat_id="{{$child->id}}"
                                          class="category-name">{{$parent->name}}</span>

                                </span>
                            </span>
                @endif
                <span class="badge-wrapper box">
                                <span class="badge-category-bg" style="background-color: #AB9364;"></span>
                                <span style="color: #FFFFFF;" class="badge-category ">
                                    <span value="aa" cat_id="{{$child->id}}"
                                          class="category-name">{{$category->name}}</span>

                                </span>
                            </span>
                <span class="badge-wrapper box">
                                <span class="badge-category-bg" style="background-color: #AB9364;"></span>
                                <span style="color: #FFFFFF;" class="badge-category ">
                                    <span value="aa" cat_id="{{$child->id}}"
                                          class="category-name">{{$child->name}}</span>

                                </span>
                            </span>
                <span class="topic-count">× 4</span>
            </div>

            <div class="category-desc">
                Topics that don't need a category, or don't fit into any other existing category.
            </div>
        </li>
        @include('Frontend.forum.Category.multi_cat',['category'=>$child, 'parent' => $category])
    @endforeach
@endif