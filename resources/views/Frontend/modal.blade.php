<link rel="stylesheet" href="{{asset('css/Frontend/styles.min.css')}}">

<style>
    body, html {
        margin: 0;
        width: 100%;
        height: 100%;
    }
</style>
<div id="replace" class="modal-dialog modal-xl">
    <div class="modal-content photo-modal">
        <div class="photo-container">
            <div class="photo-row">
                <div class="photo-left">
                    <div class="photo-img" style="min-width: 280px; max-width: calc((600px - 10%) * 1.50015);">
                        <div class="image-container" style="padding-bottom: 66.66%;">
                            <img id="image"
                                 src="{{asset('images/photo_upload/'.$image->image)}}"
                                 alt="The art of teaching ballet">
                        </div>
                    </div>
                </div>
                <div class="photo-right">
                    <div class="photo-info">
                        <div class="author"><a href="/user/5bfd44c3f0fed700165713d2" class="author-pic"
                                               style="background-color: rgb(201, 185, 130);">M</a><a
                                    href="/user/5bfd44c3f0fed700165713d2"
                                    class="author-name">{{$image->users->name}}.icons8</a></div>
                        <div class="date">{{\Illuminate\Support\Carbon::parse($image->created_at)->format('M d, Y')}}</div>
                    </div>
                    @if($image->image_type==0)
                        <div class="photo-controls">
                            <a href="{{route('download',$image->id)}}" class="btn is-download">Download</a>
                            <div class="btn is-like">
                                <span href="{{route('editor')}}">Recompose</span>
                            </div>
                        </div>
                    @elseif($image->image_type==1)
                        <div class="premium photo-controls">
                            @if(\Illuminate\Support\Facades\Auth::check())
                                <a href="javascript:void(0)" class="order_click btn is-download"
                                   data-id="{{$image->id}}" data-toggle="modal">Order Now @
                                    <span class="btn-icon">
                                    <i class="icofont-dollar">{{$image->cost}}</i>
                                </span>

                                </a>
                            @else
                                <a data-dismiss="modal" onclick="$('#loginModal').modal('show');" href=""
                                   class="btn is-download" data-toggle="modal" data-target="#loginModal">Order Now</a>
                            @endif

                            <div id="button" class="btn is-like">
                                <span class="btn-icon">
                                    <i class="icofont-heart"></i>
                                </span>
                                <a href="{{route('editor',$image->id)}}">Recompose</a>
                            </div>

                            <div class="btn is-like">
                                <span class="btn-icon">
                                    <i class="icofont-dollar"></i>
                                </span>
                                <a class="paypal" data-id="{{$image->cost}}" href="#">Pay with Paypal</a>
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
</divide>
<pixie-editor>
    <div class="global-spinner">
        <style>.global-spinner {
                display: none;
                align-items: center;
                justify-content: center;
                z-index: 999;
                background: #fff;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }</style>
        <style>.la-ball-spin-clockwise, .la-ball-spin-clockwise > div {
                position: relative;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box
            }

            .la-ball-spin-clockwise {
                display: block;
                font-size: 0;
                color: #1976d2
            }

            .la-ball-spin-clockwise.la-dark {
                color: #333
            }

            .la-ball-spin-clockwise > div {
                display: inline-block;
                float: none;
                background-color: currentColor;
                border: 0 solid currentColor
            }

            .la-ball-spin-clockwise {
                width: 32px;
                height: 32px
            }

            .la-ball-spin-clockwise > div {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 8px;
                height: 8px;
                margin-top: -4px;
                margin-left: -4px;
                border-radius: 100%;
                -webkit-animation: ball-spin-clockwise 1s infinite ease-in-out;
                -moz-animation: ball-spin-clockwise 1s infinite ease-in-out;
                -o-animation: ball-spin-clockwise 1s infinite ease-in-out;
                animation: ball-spin-clockwise 1s infinite ease-in-out
            }

            .la-ball-spin-clockwise > div:nth-child(1) {
                top: 5%;
                left: 50%;
                -webkit-animation-delay: -.875s;
                -moz-animation-delay: -.875s;
                -o-animation-delay: -.875s;
                animation-delay: -.875s
            }

            .la-ball-spin-clockwise > div:nth-child(2) {
                top: 18.1801948466%;
                left: 81.8198051534%;
                -webkit-animation-delay: -.75s;
                -moz-animation-delay: -.75s;
                -o-animation-delay: -.75s;
                animation-delay: -.75s
            }

            .la-ball-spin-clockwise > div:nth-child(3) {
                top: 50%;
                left: 95%;
                -webkit-animation-delay: -.625s;
                -moz-animation-delay: -.625s;
                -o-animation-delay: -.625s;
                animation-delay: -.625s
            }

            .la-ball-spin-clockwise > div:nth-child(4) {
                top: 81.8198051534%;
                left: 81.8198051534%;
                -webkit-animation-delay: -.5s;
                -moz-animation-delay: -.5s;
                -o-animation-delay: -.5s;
                animation-delay: -.5s
            }

            .la-ball-spin-clockwise > div:nth-child(5) {
                top: 94.9999999966%;
                left: 50.0000000005%;
                -webkit-animation-delay: -.375s;
                -moz-animation-delay: -.375s;
                -o-animation-delay: -.375s;
                animation-delay: -.375s
            }

            .la-ball-spin-clockwise > div:nth-child(6) {
                top: 81.8198046966%;
                left: 18.1801949248%;
                -webkit-animation-delay: -.25s;
                -moz-animation-delay: -.25s;
                -o-animation-delay: -.25s;
                animation-delay: -.25s
            }

            .la-ball-spin-clockwise > div:nth-child(7) {
                top: 49.9999750815%;
                left: 5.0000051215%;
                -webkit-animation-delay: -.125s;
                -moz-animation-delay: -.125s;
                -o-animation-delay: -.125s;
                animation-delay: -.125s
            }

            .la-ball-spin-clockwise > div:nth-child(8) {
                top: 18.179464974%;
                left: 18.1803700518%;
                -webkit-animation-delay: 0s;
                -moz-animation-delay: 0s;
                -o-animation-delay: 0s;
                animation-delay: 0s
            }

            .la-ball-spin-clockwise.la-sm {
                width: 16px;
                height: 16px
            }

            .la-ball-spin-clockwise.la-sm > div {
                width: 4px;
                height: 4px;
                margin-top: -2px;
                margin-left: -2px
            }

            .la-ball-spin-clockwise.la-2x {
                width: 64px;
                height: 64px
            }

            .la-ball-spin-clockwise.la-2x > div {
                width: 16px;
                height: 16px;
                margin-top: -8px;
                margin-left: -8px
            }

            .la-ball-spin-clockwise.la-3x {
                width: 96px;
                height: 96px
            }

            .la-ball-spin-clockwise.la-3x > div {
                width: 24px;
                height: 24px;
                margin-top: -12px;
                margin-left: -12px
            }

            @-webkit-keyframes ball-spin-clockwise {
                0%, 100% {
                    opacity: 1;
                    -webkit-transform: scale(1);
                    transform: scale(1)
                }
                20% {
                    opacity: 1
                }
                80% {
                    opacity: 0;
                    -webkit-transform: scale(0);
                    transform: scale(0)
                }
            }

            @-moz-keyframes ball-spin-clockwise {
                0%, 100% {
                    opacity: 1;
                    -moz-transform: scale(1);
                    transform: scale(1)
                }
                20% {
                    opacity: 1
                }
                80% {
                    opacity: 0;
                    -moz-transform: scale(0);
                    transform: scale(0)
                }
            }

            @-o-keyframes ball-spin-clockwise {
                0%, 100% {
                    opacity: 1;
                    -o-transform: scale(1);
                    transform: scale(1)
                }
                20% {
                    opacity: 1
                }
                80% {
                    opacity: 0;
                    -o-transform: scale(0);
                    transform: scale(0)
                }
            }

            @keyframes ball-spin-clockwise {
                0%, 100% {
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1)
                }
                20% {
                    opacity: 1
                }
                80% {
                    opacity: 0;
                    -webkit-transform: scale(0);
                    -moz-transform: scale(0);
                    -o-transform: scale(0);
                    transform: scale(0)
                }
            }</style>
        <div class="la-ball-spin-clockwise la-2x">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <script>setTimeout(function () {
            var spinner = document.querySelector('.global-spinner');
            if (spinner) spinner.style.display = 'flex';
        }, 50);</script>
</pixie-editor>
<script src="{{asset('js/Frontend/scripts.min.js')}}"></script>


<hr>

<script>

    var pixie = new Pixie({
        ui: {
            visible: false,
            openImageDialog: true,
            mode: 'overlay',
        }
    });


</script>

{{--<script>--}}
{{--// var pixie = new Pixie({--}}
{{--//     image: 'some-image.jpg',--}}
{{--// });--}}

{{--document.querySelector('#button').addEventListener('click', function(e) {--}}
{{--pixie.resetAndOpenEditor({image: '#image'});--}}
{{--});--}}
{{--</script>--}}
<script>

    document.querySelector('#button').addEventListener('click', function () {
        $('#replace').hide();

        pixie.openEditorWithImage(document.querySelector('#image'));
    });
</script>
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
            var id = $(this).attr('data-id');
            if (confirm('Confirm order?')) {
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: "{{route('photo-order')}}",
                    type: "POST",
                    data: {
                        order_id: id
                    },
                    success: function (response) {
                        toastr.success(response.message);
                    }
                });
            }
        });
        $('.paypal').click(function () {
            var paypal = $(this).attr('data-id');
            console.log(paypal);
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "{{route('paypal')}}",
                type: "POST",
                data: {
                    amount: paypal
                },
                success: function (response) {
                    toastr.success(response.message);
                }
            });
        })

    });
</script>