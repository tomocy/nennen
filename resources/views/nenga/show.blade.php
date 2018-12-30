@extends('layouts.master')

@section('ogp')
<meta property="og:url" content="{{ url()->current() }}" /> 
<meta property="og:title" content="Nenga" /> 
<meta property="og:image" content="{{ asset($nenga->ogp_image_path) }}" /> 
<meta property="og:description" content="年賀状をWebから送ろう!" />
@endsection

@section('content')
<div id="nenga-show">
    <div class="container">
        <div class="image-container">
            <img src="{{ asset($nenga->image_path) }}" alt="" class="image">
        </div>
        <div class="share-button-list-container">
            <ul>
                <li class="d-inline-block">
                    <a href="http://twitter.com/share?url={{ url()->current() }}" target="_blank"><i class="share-button share-button-twitter fab fa-twitter"></i></a>
                </li>
                <li class="d-inline-block">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank"><i class="share-button share-button-facebook fab fa-facebook"></i></a>
                </li>
                <li class="d-inline-block">
                    <a href="https://timeline.line.me/social-plugin/share?url={{ urlencode(url()->current()) }}" target="_blank"><i class="share-button share-button-line fab fa-line"></i></a>
                </li>
            </ul>
        </div>
        <div class="create-button-container">
            <a href="{{ route('nenga.new') }}" class="btn btn-nenga">新しく作る</a>
        </div>
    </div>
</div>
@endsection