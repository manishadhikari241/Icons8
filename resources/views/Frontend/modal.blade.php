<div class="modal-dialog modal-xl">
    <div class="modal-content photo-modal">
        <div class="photo-container">
            <div class="photo-row">
                <div class="photo-left">
                    <div class="photo-img" style="min-width: 280px; max-width: calc((600px - 10%) * 1.50015);">
                        <div class="image-container" style="padding-bottom: 66.66%;">
                            <img
                                    src="{{asset('images/photo_upload/'.$image->image)}}"
                                    alt="The art of teaching ballet">
                        </div>
                    </div>
                </div>
                <div class="photo-right">
                    <div class="photo-info">
                        <div class="author"><a href="/user/5bfd44c3f0fed700165713d2" class="author-pic"
                                               style="background-color: rgb(201, 185, 130);">P</a><a
                                    href="/user/5bfd44c3f0fed700165713d2"
                                    class="author-name">pavel.aksyonov.icons8</a></div>
                        <div class="date">{{\Illuminate\Support\Carbon::parse($image->created_at)->format('M d, Y')}}</div>
                    </div>
                    @if($image->image_type==0)
                        <div class="photo-controls">
                            <a href="{{route('download',$image->id)}}" class="btn is-download">Download</a>
                            <div class="btn is-like">
                                <span>Free</span>
                            </div>
                        </div>
                    @elseif($image->image_type==1)
                        <div class="premium photo-controls">
                            @if(\Illuminate\Support\Facades\Auth::check())
                                <a href="javascript:void(0)"  class="order_click btn is-download" data-id="{{$image->id}}" data-toggle="modal">Order Now</a>
                            @else
                                <a data-dismiss="modal" onclick="$('#loginModal').modal('show');" href=""
                                   class="btn is-download" data-toggle="modal" data-target="#loginModal" >Order Now</a>
                            @endif

                            <div class="btn is-like">
                                <span class="btn-icon">
                                    <i class="icofont-heart"></i>
                                </span>
                                <span>Premium</span>
                            </div>
                        </div>
                    @endif
                    <div class="photo-details">
                        <div class="details is-expand">
                            <button class="summary"><span class="arrow"></span><span>Description</span></button>
                            <div class="details-content">
                                <h1 class="photo-title">{!! $image->description!!}</h1>
                            </div>
                            <div class="details">
                                <button class="summary"><span class="arrow"></span><span>Credits</span></button>
                                <div class="details-content">
                                    <dl class="credits">
                                        <dt>Photographer:</dt>
                                        <dd><a href="/photographers/alexey-sokolov"
                                               class="details-link">{{$image->photos->first()->photographer}}
                                            </a>
                                            <!---->
                                        </dd>
                                    </dl>
                                    <dl class="credits">
                                        <dt>Models:</dt>
                                        <dd>
                                            @foreach($image->models as $item)
                                                <a href="/models/anna" class="details-link">{{$item->model}}</a>
                                                <span>, </span>
                                        @endforeach
                                        <!---->
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <button class="summary"><span class="arrow"></span><span>License</span></button>
                            <div class="details-content">
                                <p>{{$image->license}}</p>
                            </div>
                            <button class="summary"><span class="arrow"></span><span>Tags</span></button>
                            <div class="details-content">
                                @foreach($image->tags as $key)
                                    {{$key->name}},
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="masonry">
                @foreach($img->split(5) as $item)
                <div class="column">
                    @foreach($item as $value)
                        <div class="display card"
                             data-id="{{$value->id}}">
                            <a href="" class="card-link"></a>
                            <div class="card-image">
                                <img src="{{asset('images/photo_upload/'.$value->image)}}"
                                     alt="{!! $value->description  !!}">
                                <div class="card-control">
                                    <a href="" class="card-edit">Recompose</a>
                                    <button class="card-like">
                                    <span class="card-like-icon">
                                        <svg width="100%" height="100%"><use xlink:href="#heart"></use></svg>
                                    </span>
                                        <span class="card-like-value">2</span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-caption">{{$value->title}} </div>
                        </div>
                    @endforeach
                </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/toastr.min.js')}}"></script>

<script>
    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}");
    @endif
    @if(Session::has('error'))
    toastr.error("{{Session::get('error')}}");
    @endif
    @if(Session::has('info'))
    toastr.info("{{Session::get('info')}}");
    @endif
    @if ($errors->any())
    @foreach($errors->all() as $error)
    toastr.warning("{{ $error }}");
    @endforeach
    @endif
</script>
<script>
    $(document).ready(function () {
        $('.order_click').click(function () {
            var id=$(this).attr('data-id');
            if (confirm('Confirm order?')){
                $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "{{route('photo-order')}}",
                type: "POST",
                data: {
                    order_id:id
                },
                  success:function (response) {
                      toastr.success(response.message);
                  }
            });}
        });

    });
</script>