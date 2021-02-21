@extends('lyaouts.main')

@section('header')
    <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{{ $news['title'] }}</h1>
                        <span class="subheading">{{ $news['category'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">

                <div class="post-preview">
                        <h2 class="post-title">
                            {{ $news['title'] }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ $news['short_desk']  }}
                        </h3>
                        <img src="{{$news['img_url']}}" alt="">
                    <p class="post-meta">{{ $news['category'] }}</p>
                    </a>
                </div>
                <hr>

        <!-- Pager -->
            <div class="clearfix">
                <a href='news/category'>Назад</a>
                <a href="<?= route('admin.news.index')?>">Админка</a>
            </div>
        </div>
    </div>
    </article>
@stop

