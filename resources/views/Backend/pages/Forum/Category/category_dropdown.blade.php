@if($category->subCategory->isNotEmpty())
    @foreach($category->subCategory as $child)
        <option value="{{ $child->id }}">
            &nbsp;&nbsp;{{ App\Helpers\Helper::categorySeperator('-', $loop->depth) }} {{ $child->name }}</option>
        @include('Backend.pages.Forum.Category.category_dropdown', ['category' => $child])
    @endforeach
@endif
{{--@if(isset($product->product_category)&& $product->product_category==$child->id) selected--}}
{{--@endif--}}
{{--@if(isset($categoryedit)&& $categoryedit->parent_id==$child->id)selected="selected"--}}
{{--@endif  @if(isset($slideedit)&& $slideedit->category_id==$child->id)selected="selected" @endif--}}