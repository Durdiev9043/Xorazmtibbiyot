<div class="col-md-6">
    <div class="big-news big-news_column">
        <div class="big-news__img p-relative"><a href="{{ route('post',$new->id) }}">
                <img src="{{asset('storage/'.$new->images->first()->image)}}"></a></div><div class="news-meta"><span>{{$new2->created_at->format('d M Y h:i ') }}</span></div>
        <div class="big-news__content">
            <a class="big-news__title" href="{{ route('post',$new->id) }}"> {{ $new2->title_uz }}</a>
            <div class="big-news__description">{{ \Illuminate\Support\Str::limit($new2->content_uz, 250) }}...</div>

        </div>
    </div>
</div>
