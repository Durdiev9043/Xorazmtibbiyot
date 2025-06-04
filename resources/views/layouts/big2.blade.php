<div class="col-md-6">
    <div class="big-news big-news_column">
        <div class="big-news__img p-relative">
            <a href="{{ route('post', $new2->id) }}">
                @if ($new2->images->isNotEmpty())
                    <img src="{{ asset('storage/' . $new2->images->first()->image) }}">
                @else
                    <img src="{{ asset('images/default.png') }}"> {{-- Zaxira rasm --}}
                @endif
            </a>
        </div>
        <div class="news-meta">
            <span>{{ $new2->created_at->format('d M Y H:i') }}</span>
        </div>
        <div class="big-news__content">
            <a class="big-news__title" href="{{ route('post', $new2->id) }}">
                {{ $new2->{'title_' . app()->getLocale()} ?? $new2->title_uz }}
            </a>
            <div class="big-news__description">
                {{ \Illuminate\Support\Str::limit($new2->{'content_' . app()->getLocale()} ?? $new2->content_uz, 250) }}...
            </div>
        </div>
    </div>
</div>
