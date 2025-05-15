



<div class="top-news__big">
    <a class="big-news" href="{full-link}">
        <span class="big-news__img"><img src="{{asset('storage/'.$new->images->first()->image)}}" /></span>
        <span class="big-news__content">
                                    <div class="news-meta"><span>{{$new->created_at->format('d M Y h:i ') }}</span></div>
                                    <span class="big-news__title">{{ $new->title_uz }}</span>
                                    <span class="big-news__description">{{ $new->content_uz }}...</span>
                                 </span>
    </a>
</div>
