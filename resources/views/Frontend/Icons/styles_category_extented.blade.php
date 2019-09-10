@foreach($styles->subCategory as $child)
    @if($child->subCategory->isnotEmpty())
        <div class="app-expand is-sub-expand">
            <div class="toggle"><i class="icofont-thin-down"></i></div>
            <div class="title"><a href="{{route('inner-icons',$child->slug)}}"> {{$child->name}}</a></div>
            <div class="content">
                <div class="list sub-list">
                    @include('Frontend.Icons.styles_category_extented',['styles'=>$child])
                </div>
            </div>
        </div>
    @else
        <a href="{{route('inner-icons',$child->slug)}}" class="list-item sub-list-item">
            {{$child->name}}</a>
    @endif
@endforeach