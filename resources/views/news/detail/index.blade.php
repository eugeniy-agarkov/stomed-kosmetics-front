@extends('layouts.app')

@section('meta')
    <title>{{ isset($seo->meta_title) ? $seo->meta_title : $news->name }}</title>
@endsection

@section('content')

    @include( 'news.detail.breadcrumbs' )

    @include( 'news.detail.intro' )

    @include( 'news.detail.prices' )

    @include( 'partials.cta-form-submit-application' )

    @include( 'news.detail.text' )

    @include( 'news.detail.relevant' )

    @include( 'partials.sale-last-slider', ['sales' => $sales, 'title' => __( 'Акции' )] )

@endsection
