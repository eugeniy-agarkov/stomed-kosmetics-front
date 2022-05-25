@extends('layouts.app')

@section('meta')
    <title>{{ isset($seo->meta_title) ? $seo->meta_title : __( 'Поиск' ) }}</title>
@endsection

@section('content')

    @include( 'search.breadcrumbs' )

    @include( 'search.form' )

    @include( 'search.result' )

@endsection
