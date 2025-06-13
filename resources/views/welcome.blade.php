@extends('layouts.app')

@section('content')

    <div class="container mb-50">

        <div class="row">
            <div class="col-md-9">

                <div class="row">
                    {{--                            {content}--}}
                </div>


                <div class="top-news">
                    @include('layouts.bispost')
                    <div class="top-news__small-items">
                        <div class="row">


                            @foreach($news as $new)
                                <div class="col-md-6">
                                    <div class="small-news">
                                        <a class="small-news__img" href="{{ route('post', $new->id) }}">
                                            <img src="{{ asset('storage/' . $new->images->first()->image) }}" />
                                        </a>
                                        <div class="small-news__content">
                                            <div class="news-meta">
                                                <span>{{ $new->created_at->format('d M Y h:i') }}</span>
                                            </div>
                                            <a class="small-news__title" href="{{ route('post', $new->id) }}">
                                                {{ $new->{'title_' . app()->getLocale()} }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="editor-choice">
                    <div class="block-title" style="background: #22bad233;padding:5px;border-radius:5px"><a href="/" style="margin: 10px;text-decoration: none;color: #455d9b;font-size: 18px;font-weight: bold;">	{{ __('home.Tabiatning',) }}</a><a class="link" href="/marifij/">{{ __('home.Barchasi',) }}</a></div>
                    <div class="row">
                        @foreach($news3 as $new)
                            <div class="col-md-4">
                                <div class="news">
                                    <div class="news__img p-relative">
                                        <a href="{{ route('post', $new->id) }}">
                                            @if ($new->images->isNotEmpty())
                                                <img src="{{ asset('storage/' . $new->images->first()->image) }}">
                                            @else
                                                <img src="{{ asset('images/default.png') }}"> {{-- zaxira rasm --}}
                                            @endif
                                        </a>
                                    </div>
                                    <div class="news-meta">
                                        <span>{{ $new->created_at->format('d M Y H:i') }}</span>
                                    </div>
                                    <a class="news__title" href="{{ route('post', $new->id) }}">
                                        {{ $new->{'title_' . app()->getLocale()} ?? $new->title_uz }}
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{--                [/aviable]--}}
            <div class="col-md-3">
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

    </div>

    <div class='adv-wrapper'>
        <div class='container'>
            <div id='adfox_162618030148559683'></div>
            <script>
                window.Ya.adfoxCode.create({
                    ownerId: 367651,
                    containerId: 'adfox_162618030148559683',
                    params: {
                        pp: 'g',
                        ps: 'eudb',
                        p2: 'hhcg'
                    }
                });
            </script>
        </div>
    </div>
    <!--<div class="container" id="actual-news-content" data='{"url":"\/uz\/news\/list?f=actual","title":"Dolzarb Xabarlar"}'></div>
    <div class="interview">
       <div class="container" id="interview-news-content" data='{"url":"\/uz\/news\/list?f=interview","title":"Intervyu","btn_title":"Barchasi","img":"\/assets\/99110d40\/img\/blue-right-arrow.svg","link":"\/uz\/interviews"}'></div>
    </div>-->



    <div class="container">
        <div class="row">
            <div class="col-md-6" id="video-news-content" data='{"title":"Video yangiliklar","url":"\/uz\/news\/list?f=video&t=1","link":"\/uz\/news\/list?f=video","img":"\/assets\/99110d40\/img\/blue-right-arrow.svg","btn_title":"Barcha maqolalar"}'></div>
            <div class="col-md-6" id="photo-news-content" data='{"url":"\/uz\/news\/list?f=photo&t=1","link":"\/uz\/news\/list?f=photo","title":"fotoyangiliklar","img":"\/assets\/99110d40\/img\/blue-right-arrow.svg","btn_title":"Barcha maqolalar"}'></div>
        </div>
    </div>
    {{--    [aviable=main]--}}
    <div class='adv-wrapper' style='background-color:#fff;'>
        <div class='container'>
            <div id='adfox_162618030148559653'></div>
            <script>
                window.Ya.adfoxCode.create({
                    ownerId: 367651,
                    containerId: 'adfox_162618030148559653',
                    params: {
                        pp: 'g',
                        ps: 'eudb',
                        p2: 'hhcg'
                    }
                });
            </script>
        </div>
        <div class="container" id="actual-news-content" data="{&quot;url&quot;:&quot;\/news\/list?f=actual&quot;,&quot;title&quot;:&quot;\u0414\u043e\u043b\u0437\u0430\u0440\u0431 \u0445\u0430\u0431\u0430\u0440\u043b\u0430\u0440&quot;}">
            <div class="block-title" style="background: #22bad233;padding:5px;border-radius:5px">
                <style>.aa:before {
                        width: 15px;
                        height: 15px;
                        background: transparent;
                        border: 4px solid #1e77a9 !important;
                        display: block;</style>
                <a href="/izhtimoij/" style="margin: 10px;text-decoration: none;color: #455d9b;font-size: 18px;font-weight: bold;" class="aa">
                    {{ __('home.jaxon',) }}</a>
                <a class="link" href="/">{{ __('home.Barchasi',) }}</a></div>
            <div class="row">
                @include('layouts.big2')
                {{--                {custom template="big2" category="28"  limit="1"}--}}
                <div class="col-md-6">
                    <div class="row">
                        @foreach($news as $new)
                            <div class="col-md-6 mb-25">
                                <div class="news">
                                    <div class="news__img p-relative">
                                        <a href="{full-link}">
                                            <img src="{{asset('storage/'.$new->images->first()->image)}}"></a></div>
                                    <a class="news__title" href="{full-link}">{{ $new->title_uz }}</a>
                                    <div class="news-meta"><span>{{$new->created_at->format('d M Y h:i ') }}</span></div>
                                </div>
                            </div>

                            {{--                        {custom template="four_little" category="28"  limit="4" from="1"}--}}
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="interview" style="background: #fffff !important">
        <div class="container" id="interview-news-content" data="{&quot;url&quot;:&quot;\/news\/list?f=interview&quot;,&quot;title&quot;:&quot;\u0418\u043d\u0442\u0435\u0440\u0432\u044c\u044e&quot;,&quot;btn_title&quot;:&quot;\u0411\u0430\u0440\u0447\u0430\u0441\u0438&quot;,&quot;img&quot;:&quot;\/assets\/3d48c862\/img\/blue-right-arrow.svg&quot;,&quot;link&quot;:&quot;\/interviews&quot;}">
            <div class="block-title" style="background: #22bad233;padding:5px;border-radius:5px">
                <style>.aa:before {
                        width: 15px;
                        height: 15px;
                        background: transparent;
                        border: 4px solid #1e77a9 !important;
                        display: block;</style>
                <a href="/" style="margin: 10px;text-decoration: none;color: #455d9b;font-size: 18px;font-weight: bold;" class="aa">
                    {{ __('home.Shifokor',) }} </a>
                <a class="link" href="/">{{ __('home.Barchasi',) }}</a></div>
            <div class="interview-head space-between">



            </div>
            <div class="interview-body">
                <div class="tm-row">
                    @foreach($news as $new)
                        <div class="tm-col-3">
                            <div class="interview-post">
                                <a href="{{ route('post', $new->id) }}" class="white-bg">
                                    <div class="ip-head">
                                        <style>
                                            .imgxx {
                                                width: 100% !important;
                                                height: 100% !important;
                                                object-fit: cover !important;
                                            }
                                        </style>
                                        <div class="post-thumbnail">
                                            @if ($new->images->isNotEmpty())
                                                <img class="imgxx" src="{{ asset('storage/' . $new->images->first()->image) }}">
                                            @else
                                                <img class="imgxx" src="{{ asset('images/default.png') }}">
                                            @endif
                                        </div>
                                        <span class="block-word" style="font-size: 22px !important;">Xorazmtibbiyot</span>
                                    </div>
                                    <div class="ip-body">
                                        <div class="post-title">
                                            {{ $new->{'title_' . app()->getLocale()} ?? $new->title_uz }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach




                </div>
            </div>
        </div>

        <div class="container" id="authored-news" data="{&quot;title_all&quot;:&quot;\u0411\u0430\u0440\u0447\u0430\u0441\u0438&quot;,&quot;url&quot;:&quot;\/news\/list?f=authored&quot;,&quot;img&quot;:&quot;\/assets\/3d48c862\/img\/blue-right-arrow.svg&quot;}">
            <div class="block-title" style="background: #22bad233;padding:5px;border-radius:5px">
                <style>.aa:before {width: 15px;height: 15px;background: transparent;border: 4px solid #1e77a9 !important;display: block;</style>
                <a href="/ilm-fan/" style="margin: 10px;text-decoration: none;#455d9b: black;font-size: 18px;font-weight: bold;" class="aa">
                    {{ __('home.turmush',) }}</a>
                <a class="link" href="/">  {{ __('home.Barchasi',) }}</a></div>
            <div class="row">

                <div class="row">
                    <div class="col-md-12">

                        <div class="row">
                            @foreach($news3 as $new)
                                <div class="col-md-4 mb-30">
                                    <div class="news">
                                        <div class="news__img p-relative">
                                            <a href="{{ route('post', $new->id) }}">
                                                @if ($new->images->isNotEmpty())
                                                    <img src="{{ asset('storage/' . $new->images->first()->image) }}">
                                                @else
                                                    <img src="{{ asset('images/default.png') }}"> {{-- zaxira rasm --}}
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

@endsection
