@extends('layouts.app')

@section('meta')
    <title>{{ isset($seo->meta_title) ? $seo->meta_title : __( 'Отзывы' ) }}</title>
@endsection

@section('content')

    @include( 'review.breadcrumbs' )

    @include( 'review.title' )

    @include( 'review.list' )

@endsection
