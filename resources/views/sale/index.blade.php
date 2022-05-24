@extends('layouts.app')

@section('meta')
    <title>{{ isset($seo->meta_title) ? $seo->meta_title : __( 'Акции' ) }}</title>
@endsection

@section('content')

    @include( 'sale.breadcrumbs' )

    @include( 'sale.title' )

    @include( 'partials.mobile-panel' )

    @include( 'partials.search-panel', [ 'title' => __( 'Быстрый поиск по акциям' ) ] )

    @include( 'sale.list' )

@endsection
