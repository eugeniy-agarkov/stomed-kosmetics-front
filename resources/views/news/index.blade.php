@extends('layouts.app')

@section('meta')
    <title>{{ isset($seo->meta_title) ? $seo->meta_title : __( 'Новости' ) }}</title>
@endsection

@section('content')

    @include( 'news.breadcrumbs' )

    @include( 'news.title' )

    @include( 'news.list' )

@endsection
