@extends('lyaouts.main')

@section('header')
    <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        @foreach ($news_data as $key => $news)
                            <h1>{{$news['category'] }}</h1>
                            @if ($loop->first)
                                @break
                            @endif
                        @endforeach
                            <span class="subheading">News</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach ($news_data as $key => $news)
                <div class="post-preview">
                    <a href="{{ route('news.show', ['id' =>$key]) }}">
                        <h2 class="post-title">
                            {{ $news['title'] }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ $news['short_desk']  }}
                        </h3>
                    </a>
                    <p class="post-meta">{{ $news['category'] }}</p>
                    </a>
                </div>
                <hr>
        @endforeach
        <!-- Pager -->
            <div class="clearfix">
                <a href='/'>Назад</a>
            </div>
        </div>
    </div>
    </div>
@stop
