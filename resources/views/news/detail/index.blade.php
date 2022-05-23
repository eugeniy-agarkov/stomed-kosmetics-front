@extends('layouts.app')

@section('meta')
    <title>{{ isset($seo->meta_title) ? $seo->meta_title : $news->name }}</title>
@endsection

@section('content')

    @include( 'news.detail.breadcrumbs' )

    @include( 'news.detail.intro' )

    @include( 'news.detail.prices' )

@endsection

@include( 'partials.contacts-script' )
