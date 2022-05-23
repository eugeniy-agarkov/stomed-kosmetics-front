@extends('layouts.app')

@section('meta')
    <title>{{ isset($seo->meta_title) ? $seo->meta_title : __( 'Акции' ) }}</title>
@endsection

@section('content')

    @include( 'sale.breadcrumbs' )

    @include( 'sale.title' )

    @include( 'sale.list' )

@endsection

@include( 'partials.contacts-script' )
