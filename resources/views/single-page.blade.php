@extends('layouts.page')

@section('content')

    <div id="breadcrum-inner-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="breadcrum-inner-header">
                        <h1>{{ $post->title }}</h1>
                        <a href="{{ url('/') }}">Home</a> <i class="fa fa-circle"></i> <a
                                href="{{ url('/'.$post->name) }}"><span>{{ $post->title }}</span></a></div>
                </div>
            </div>
        </div>
    </div>

    <div id="about-company">
        <div class="container">
            <div class="row">
                @if(\App\Http\Helpers\Poster::featuredImage($meta, 'about-user') != "")
                    <div class="col-md-8 col-sm-12 col-xs-12 v-center">
                        <div class="about-heading-title bt_heading_3">
                        </div>

                        {!! $post->content !!}
                        <p class="inner-secon-tl">
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 user-lt-above">
                        {{--<img src="images/about-user.png" alt="about-user">--}}
                        {!! \App\Http\Helpers\Poster::featuredImage($meta, 'about-user') !!}
                    </div>
                @else

                    <div class="col-md-12 col-sm-12 col-xs-12 v-center">
                        {!! $post->content !!}
                        <p class="inner-secon-tl">
                        </p>
                    </div>

                @endif
            </div>
        </div>
        <br/>
        <br/>
    </div>

@endsection
{{--@include('template-parts/authpop')--}}