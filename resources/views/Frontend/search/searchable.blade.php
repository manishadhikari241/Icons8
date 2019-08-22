@if(isset($ser))
@foreach($ser as $value)
    <div class="app-tracks-list">
        <div class="track-list-title">{{$value->name}}</div>
        <div class="track-list-row track-list-items ">
                <div class="tracks-list-col">
                    <div class="app-tracks-item">

                        <div class="tracks-item-row">
                            <div class="tracks-item-col tracks-item-cover">
                                <img src="{{asset('images/music/'.$value->image)}}"
                                     alt="Delirix - Welcome To The Jungle"
                                     class="tracks-item-cover-img">
                            </div>
                            <div class="tracks-item-col tracks-item-wrap">
                                <div class="tracks-item-info">
                                    <div class="tracks-item-info-name">

                                        <span class="btn-inner">{{$value->name}}</span>

                                    </div>
                                    <div class="tracks-item-info-author">
                                        <a href=""
                                           class="tracks-item-info-link">{{$value->artists->name}}</a>
                                    </div>
                                </div>

                            </div>
                            <div class="tracks-item-col tracks-item-download">
                                <button type="button" class="tracks-item-download-btn">
                                                    <span class="icon-download">
                                                        <svg width="100%" height="100%"><use
                                                                    xlink:href="#arrowDownload"></use></svg>
                                                    </span>
                                </button>
                            </div>
                            <div class="tracks-item-col tracks-item-tags">
                                @if($value->tags != null)
                                    @foreach($value->tags->slice(0,2) as $tag)
                                        <a href=""
                                           class="tracks-item-tags-btn">{{$tag->name}}</a>
                                    @endforeach
                                @endif
                                <div class="app-popup">
                                    <div class="app-popup-toggle">
                                        <button type="button" class="tracks-item-tags-btn">
                                            more
                                        </button>
                                    </div>
                                    <div class="app-popup-content is-bottom-right">
                                        <div class="app-popup-tag-content">
                                            @foreach($value->tags->splice(2) as $item)
                                                <a href=""
                                                   class="tracks-item-tags-btn">{{$item->name}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
    </div>
@endforeach
@endif
@if(isset($val))
    <div class="app-tracks-list">
        <div class="track-list-title">SEARCH</div>
        <div class="track-list-row track-list-items ">
            <div class="tracks-list-col">
                <div class="app-tracks-item">

                   <p>Oops... Seems that we don't have Action category yet.
                       If you think that category is important, please let us know
                   </p>
                    <a href="{{route('music')}}" class="btn btn-outline-danger">Back to all categories</a>
                </div>
            </div>
        </div>
    </div>

@endif