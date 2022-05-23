@extends('site.layouts.news')

@section('content')
    <h1>{{ $article->title }}</h1>

    <p>{!! $article->description !!}</p>

    <a href="{{ route('articles') }}">{{ twillTrans('news.back') }}</a>
@endsection
