
<div class="app-tracks-list">
    <div class="track-list-title">
        @if(isset($theme->musics))
            {{\App\Model\Theme::where('id',$theme->id)->first()->name}}
        @endif
        @if(isset($genre->musics))
            {{\App\Model\Genre::where('id',$genre->id)->first()->name}}
        @endif
        @if(isset($mood->musics))
            {{\App\Model\Mood::where('id',$mood->id)->first()->name}}
        @endif
    </div>
    <div class="track-list-row track-list-items ">
        @if(isset($theme->musics)&&!isset($theme_mood)&&!isset($theme_genre)&&!isset($theme_gen_mood))
            @foreach($theme->musics as $value)
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
                                @foreach($value->tags->slice(0,2) as $tag)
                                    <a href="" class="tracks-item-tags-btn">{{$tag->name}}</a>
                                @endforeach

                                <div class="app-popup">
                                    <div class="app-popup-toggle">
                                        <button type="button" class="tracks-item-tags-btn">
                                            more
                                        </button>
                                    </div>
                                    <div class="app-popup-content is-bottom-right">
                                        <div class="app-popup-tag-content">
                                            @foreach($value->tags->splice(2) as $tag)
                                                <a href=""
                                                   class="tracks-item-tags-btn">{{$tag->name}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        @endif
        @if(isset($genre->musics)&&!isset($theme_genre)&&!isset($mood_genre)&&!isset($theme_gen_mood))
            @foreach($genre->musics as $value)
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
                                @foreach($value->tags->slice(0,2) as $tag)
                                    <a href="" class="tracks-item-tags-btn">{{$tag->name}}</a>
                                @endforeach

                                <div class="app-popup">
                                    <div class="app-popup-toggle">
                                        <button type="button" class="tracks-item-tags-btn">
                                            more
                                        </button>
                                    </div>
                                    <div class="app-popup-content is-bottom-right">
                                        <div class="app-popup-tag-content">
                                            @foreach($value->tags->splice(2) as $tag)
                                                <a href=""
                                                   class="tracks-item-tags-btn">{{$tag->name}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        @endif
        @if(isset($mood->musics)&&!isset($theme_mood)&&!isset($mood_genre)&&!isset($theme_gen_mood))
            @foreach($mood->musics as $value)
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
                                @foreach($value->tags->slice(0,2) as $tag)
                                    <a href="" class="tracks-item-tags-btn">{{$tag->name}}</a>
                                @endforeach

                                <div class="app-popup">
                                    <div class="app-popup-toggle">
                                        <button type="button" class="tracks-item-tags-btn">
                                            more
                                        </button>
                                    </div>
                                    <div class="app-popup-content is-bottom-right">
                                        <div class="app-popup-tag-content">
                                            @foreach($value->tags->splice(2) as $tag)
                                                <a href=""
                                                   class="tracks-item-tags-btn">{{$tag->name}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

        @endif
        @if(isset($theme_mood)&&!isset($theme_gen_mood))
            @foreach($theme_mood as $value)
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
                                @foreach($value->tags->slice(0,2) as $tag)
                                    <a href="" class="tracks-item-tags-btn">{{$tag->name}}</a>
                                @endforeach

                                <div class="app-popup">
                                    <div class="app-popup-toggle">
                                        <button type="button" class="tracks-item-tags-btn">
                                            more
                                        </button>
                                    </div>
                                    <div class="app-popup-content is-bottom-right">
                                        <div class="app-popup-tag-content">
                                            @foreach($value->tags->splice(2) as $tag)
                                                <a href=""
                                                   class="tracks-item-tags-btn">{{$tag->name}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        @endif
        @if(isset($theme_genre)&&!isset($theme_gen_mood))
            @foreach($theme_genre as $value)
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
                                @foreach($value->tags->slice(0,2) as $tag)
                                    <a href="" class="tracks-item-tags-btn">{{$tag->name}}</a>
                                @endforeach

                                <div class="app-popup">
                                    <div class="app-popup-toggle">
                                        <button type="button" class="tracks-item-tags-btn">
                                            more
                                        </button>
                                    </div>
                                    <div class="app-popup-content is-bottom-right">
                                        <div class="app-popup-tag-content">
                                            @foreach($value->tags->splice(2) as $tag)
                                                <a href=""
                                                   class="tracks-item-tags-btn">{{$tag->name}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        @endif
        @if(isset($mood_genre)&&!isset($theme_gen_mood))
            @foreach($mood_genre as $value)
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
                                @foreach($value->tags->slice(0,2) as $tag)
                                    <a href="" class="tracks-item-tags-btn">{{$tag->name}}</a>
                                @endforeach

                                <div class="app-popup">
                                    <div class="app-popup-toggle">
                                        <button type="button" class="tracks-item-tags-btn">
                                            more
                                        </button>
                                    </div>
                                    <div class="app-popup-content is-bottom-right">
                                        <div class="app-popup-tag-content">
                                            @foreach($value->tags->splice(2) as $tag)
                                                <a href=""
                                                   class="tracks-item-tags-btn">{{$tag->name}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        @endif
        @if(isset($theme_gen_mood))
            @foreach($theme_gen_mood as $value)
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
                                @foreach($value->tags->slice(0,2) as $tag)
                                    <a href="" class="tracks-item-tags-btn">{{$tag->name}}</a>
                                @endforeach

                                <div class="app-popup">
                                    <div class="app-popup-toggle">
                                        <button type="button" class="tracks-item-tags-btn">
                                            more
                                        </button>
                                    </div>
                                    <div class="app-popup-content is-bottom-right">
                                        <div class="app-popup-tag-content">
                                            @foreach($value->tags->splice(2) as $tag)
                                                <a href=""
                                                   class="tracks-item-tags-btn">{{$tag->name}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>

<script>

    $('.tracks-item-tags-btn').on('click', function () {
        $(this).parents('.app-popup').toggleClass('is-open');
    })
</script>