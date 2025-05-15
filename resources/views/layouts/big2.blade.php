<div class="col-md-6">
    <div class="big-news big-news_column">
        <div class="big-news__img p-relative"><a href="{full-link}">
                <img src="{{asset('storage/'.$new->images->first()->image)}}"></a></div><div class="news-meta"><span>{{$new2->created_at->format('d M Y h:i ') }}</span></div>
        <div class="big-news__content">
            <a class="big-news__title" href="{full-link}"> {{ $new2->title_uz }}</a>
            <div class="big-news__description">{{ $new2->content_uz }}...</div>

        </div>
    </div>
</div>
