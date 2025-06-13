@extends('layouts.app')

@section('content')
<div class="row container mx-auto">
    <div class="col-9">
        <div class="container" id="authored-news" data="{&quot;title_all&quot;:&quot;\u0411\u0430\u0440\u0447\u0430\u0441\u0438&quot;,&quot;url&quot;:&quot;\/news\/list?f=authored&quot;,&quot;img&quot;:&quot;\/assets\/3d48c862\/img\/blue-right-arrow.svg&quot;}">
{{--            <div class="block-title" style="background: #22bad233;padding:5px;border-radius:5px">--}}
{{--                <style>.aa:before {width: 15px;height: 15px;background: transparent;border: 4px solid #1e77a9 !important;display: block;</style>--}}
{{--                <a href="#" style="margin: 10px;text-decoration: none;#455d9b: black;font-size: 18px;font-weight: bold;" class="aa">--}}
{{--                    Sog'lom turmush tarzi</a>--}}
{{--                <a class="link" href="/ilm-fan/">Barchasi</a>--}}
{{--            </div>--}}
            <div class="row">

                <div class="row">
                    <div class="col-md-12">

                        <div class="row">
                            @foreach($news as $new)
                                <div class="col-md-4 mb-30">
                                    <div class="news">
                                        <div class="news__img p-relative">
                                            <a href="{{ route('post', $new->id) }}">
                                                @if ($new->images->isNotEmpty())
                                                    <img src="{{ asset('storage/' . $new->images->first()->image) }}">
                                                @else
                                                    <img src="{{ asset('images/default.png') }}"> {{-- agar rasm bo'lmasa --}}
                                                @endif
                                            </a>
                                        </div>
                                        <a class="news__title" href="{{ route('post', $new->id) }}">
                                            {{ $new->{'title_' . app()->getLocale()} ?? $new->title_uz }}
                                        </a>
                                        <div class="news-meta">
                                            <span>{{ $new->created_at->format('d M Y H:i') }}</span>
                                        </div>
                                        <div class="news__desc">
                                            {{ \Illuminate\Support\Str::limit($new->{'content_' . app()->getLocale()} ?? $new->content_uz, 200) }}...
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
            {{--            <div class="container" id="authored-news" >--}}
            {{--                <div class="block-title" style="background: #22bad233;padding:5px;border-radius:5px">--}}
            {{--                    <style>.aa:before {--}}
            {{--                            width: 15px;--}}
            {{--                            height: 15px;--}}
            {{--                            background: transparent;--}}
            {{--                            border: 4px solid #1e77a9 !important;--}}
            {{--                            display: block;</style>--}}
            {{--                    <a href="/uuij/" style="margin: 10px;text-decoration: none;color: #455d9b;font-size: 18px;font-weight: bold;" class="aa">--}}
            {{--                        HUQUQIY</a>--}}
            {{--                    <a class="link" href="/uuij/">Barchasi</a></div>--}}
            {{--                <div class="row">--}}

            {{--              --}}

            {{--                </div>--}}


            {{--            </div>--}}





        </div>

    </div>
    <div class="col-3">
        <a href="/uuij/" class="block-title" style="margin: 10px;text-decoration: none;color: #455d9b;font-size: 18px;font-weight: bold;">{{ __('home.songi',) }}</a>
        <div class="mb-25">
            @foreach($latest as $new)
                {{-- {custom template="sidebar" category="27,49,50,51,28,38" category="38"  limit="8" } --}}
                <a class="news-lenta w-100" href="{{ route('post', $new->id) }}">
                    <div class="news-meta">
                        <span>{{ $new->created_at->format('d M Y H:i') }}</span>
                    </div>
                    <span class="news-lenta__title">
            {{ $new->{'title_' . app()->getLocale()} ?? $new->title_uz }}
        </span>
                </a>
                <br/>
            @endforeach

        </div>
        <a href="/" class="main-btn-v2 w-100" style="background: #22bad233;">{{ __('home.koproq',) }}</a>
    </div>

</div>




@endsection
