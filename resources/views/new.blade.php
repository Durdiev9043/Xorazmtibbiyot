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
                                <div class="entry-meta mb-5">
                                    {{--                                    <span class="meta-item blog-date"><i class="icon-time"></i> <span class="txt">{date}</span></span>--}}
                                    <span class="meta-item blog-category"><i class="icon-folder-open"></i> <a href="/">Bosh sahifa</a> / {{ $cat->name_uz }}</span>
                                </div>
                                <style>
                                    .default-content img {
                                        max-width: 100%;
                                    }
                                    iframe {
                                        display: block !important;
                                        height: 500px !important;

                                    }
                                </style>
                                <h2 class="entry-title mb-5">
                                    <h3 rel="bookmark mb-5">{{ $new->title_uz}}</h3>
                                </h2>



                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="default-content">
                                            <p>
                                                {{ $new->content_uz }}
                                            </p>
                                            @foreach($new->images as $img)
                                                <img src="{{ asset('storage/'.$img->image) }}" class="fr-fic fr-dib" alt=""> <br/>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>


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
            <a href="/uuij/" class="block-title" style="margin: 10px;text-decoration: none;color: #455d9b;font-size: 18px;font-weight: bold;">So'ngi yangiliklar</a>
            <div class="mb-25">
                @foreach($latest as $new)
                    {{--                        {custom template="sidebar" category="27,49,50,51,28,38" category="38"  limit="8" }--}}
                    <a class="news-lenta w-100" href="{full-link}">
                        <div class="news-meta"><span>{{$new->created_at->format('d M Y h:i ') }}</span></div>
                        <span class="news-lenta__title"> {{ $new->title_uz }}</span>
                    </a>
                    <br/>
                @endforeach
            </div>
            <a href="/jangiliklar/" class="main-btn-v2 w-100" style="background: #22bad233;">Ko`proq yangiliklar</a>
        </div>

    </div>




@endsection
