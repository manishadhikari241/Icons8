@foreach($image as $value)
    <div class="column">
        <div class="filler card"
             data-id="{{$value->id}}">
            <a href="" class="card-link"></a>
            <div class="card-image">
                <img src="{{asset('storage/WebContent/photo_upload/'.$value->image)}}"
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
    </div>


    <div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog"
         aria-labelledby="myExtraLargeModalLabel"
         aria-hidden="true" data-dismiss="modal">

    </div>
@endforeach
<script>
    var $modal = $('#exampleModal');
    $(document).ready(function () {
        $('.filler').click(function (e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            console.log(id);
            var tempEditUrl = "{{route('filtered-modal',':id')}}";
            tempEditUrl = tempEditUrl.replace(':id', id);
            $modal.load(tempEditUrl, function (response) {
                $modal.modal({show: true});
            });
        });
    });
</script>
