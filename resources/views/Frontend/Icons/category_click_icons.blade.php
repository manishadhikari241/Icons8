<div class="pack-page">
    <div class="app-page-section custom-padding">
        <div class="page-scroll">
            <div>
                <h6 class="app-page-section-title">ABC Warriors Characters</h6>
                <div class="icons-grid">
                    <div class="set is-labels-shown">
                        @foreach($icons as $value)
                            <div class="icon">
                                <a href="" class="icons-link">
                                    <div class="app-icon"><img alt=""
                                                               data-id="{{$value->id}}"
                                                               src="{{asset('images/icons/icon_upload/'.$value->image)}}"
                                                               style="height: 50px; width: 50px;"></div>
                                </a>
                                <div class="icon-title">
                                    {{--<span class="heart"><i class="icofont-heart"></i></span>--}}
                                    <span>{{$value->name}}</span>
                                </div>
                                {{--<div class="to-collection">--}}
                                {{--<span class="basket"><i class="icofont-trash"></i></span>--}}
                                {{--<span class="red-title">Remove</span>--}}
                                {{--</div>--}}
                                <div class="to-collection" data-id="{{$value->id}}">
                                    <span class="plus">+&nbsp;</span><span class="add-to-collection">Collection</span>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<script>
    $('.to-collection').on('click', function () {
        let icon_id = $(this).attr('data-id');

        $.ajax({
            headers: {"X-CSRF-TOKEN": jQuery(`meta[name="csrf-token"]`).attr("content")},
            url: "{{route('add-to-collection-icons')}}",
            type: "POST",
            data: {
                icon_id: icon_id,
            },
            success: function (data) {

            }
        });
    });
    $('.icon').on('click', '.to-collection', function () {
        console.log('clickaa');
        var parent = $(this).parents('.icon');
        parent.toggleClass('is-selected');
        var imgurl = parent.find('img').attr('src');
        var data_id = parent.find('img').attr('data-id');

        if (parent.hasClass('is-selected')) {
            parent.find('.icon-title').prepend(`<span class="heart" style="color:#28b351"><i class="icofont-heart"></i></span>`);
            parent.find('.to-collection').remove();
            parent.append(`<div class="to-collection"><span class="basket"  style="color:red"><i class="icofont-trash"></i></span>
                            <span class="red-title"  style="color:red">Remove</span>
                        </div>`)
            $('.wrap-icon').append(`<div class="app-icon icon" style="width: 32px; height: 32px;">
                               <img alt="Mongrol icon" src="${imgurl}" >
                             </div>`);

            totalitem();
            collectionWorkspace(imgurl, data_id);

        } else {
            parent.find('.icon-title span:first-child').remove();
            parent.find('.to-collection').remove();
            parent.append(`<div class="to-collection">
                        <span class="plus">+&nbsp;</span>
                        <span>Collection</span>
                        </div>`);
            var c = $('.wrap-icon').find('.app-icon');
            c.each(function () {
                if ($(this).children('img').attr('src') === imgurl) {
                    $(this).remove();
                    totalitem();
                }
            });

            var cw = $('.collection-sidebar .icons ').find('.icon');
            cw.each(function () {
                if ($(this).find('img').attr('src') === imgurl) {
                    $(this).remove();
                    totalitem();
                }
            });
        }

    });
    var totalitem = function () {
        var n = $('.wrap-icon .app-icon').length;
        $('.recent-collection .info span').text(n);

    };


    var collectionWorkspace = function (a, b) {
        $('.collection-sidebar .icons').append(`<div class="icon">
                                    <div class="app-icon ">
                                        <img class="download" data-id="${b}" alt="Mongrol icon" style="height: 50px; width: 50px;"
                                             src="${a}" >
                                    </div>

                                    <div class="download remove">
                                        <i class="icofont-trash"></i>
                                    </div>
                                </div>`)
    }

    $('.collection-sidebar ').on('click', '.remove', function () {
        console.log('click');
        $(this).parent().remove();
        totalitem();
    })
    $('.collection-sidebar ').on('click', '.download', function () {
        console.log($(this).data('id'));

    })

    $('.close-collection').on('click', function () {
        $(this).parent().removeClass('is-active');
    })



</script>