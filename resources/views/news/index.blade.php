@extends('lyaouts.main')

@section('header')
    <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Новости</h1>
                        <span class="subheading">Blog News</span>
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
            @foreach ($category_data as $key => $category)
            <div class="post-preview">
                <a href="{{ route('news.category', ['category' =>$key]) }}">
                    <h2 class="post-title">
                        {{ $category }}
                    </h2>
                </a>
            </div>

            @endforeach
            <!-- Pager -->
            <div class="clearfix">

            </div>
        </div>
    </div>
    </div>
@stop
