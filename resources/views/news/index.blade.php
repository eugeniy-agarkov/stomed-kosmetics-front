@extends('layouts.app')

@section('meta')
    <title>{{ isset($seo->meta_title) ? $seo->meta_title : __( 'Новости' ) }}</title>
@endsection

@section('content')

    @include( 'news.breadcrumbs' )

    @include( 'news.title' )

    @include( 'partials.mobile-panel' )

    @include( 'partials.search-panel', [ 'title' => __( 'Быстрый поиск по новостям' ) ] )

    @include( 'news.list' )

@endsection
