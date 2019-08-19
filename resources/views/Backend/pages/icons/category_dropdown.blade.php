@if(isset($category->subCategory))
    @foreach($category->subCategory as $child)
        <option value="{{ $child->id }}" >&nbsp;&nbsp;{{ App\Helper::separator('-',$loop->depth) }} {{ $child->name }}</option>
        @include('dashboard.pages.icons.category_dropdown', ['category' => $child])
    @endforeach
@endif