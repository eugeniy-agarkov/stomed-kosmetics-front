@extends('layouts.app')

@section('meta')
    <title>{{ isset($seo->meta_title) ? $seo->meta_title : __( 'Услуги' ) }}</title>
@endsection

@section('content')

    @include( 'direction.breadcrumbs' )

    @include( 'direction.title' )

    @include( 'partials.mobile-panel' )

    @include( 'partials.search-panel', [ 'title' => __( 'Быстрый поиск по услугам' ) ] )

    @include( 'direction.list' )

@endsection
