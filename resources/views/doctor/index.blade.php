@extends('layouts.app')

@section('meta')
    <title>{{ isset($seo->meta_title) ? $seo->meta_title : __( 'Наши косметологи' ) }}</title>
@endsection

@section('content')

    @include( 'doctor.breadcrumbs' )

    @include( 'doctor.title' )

    @include( 'partials.mobile-panel' )

    @include( 'partials.search-panel', [ 'title' => __( 'Поиск по ФИО' ) ] )

    @include( 'doctor.list' )

@endsection
