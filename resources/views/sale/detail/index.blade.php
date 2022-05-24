@extends('layouts.app')

@section('meta')
    <title>{{ isset($seo->meta_title) ? $seo->meta_title : $sales->name }}</title>
@endsection

@section('content')

    @include( 'sale.detail.breadcrumbs' )

    @include( 'sale.detail.intro' )

    @include( 'partials.price-table', ['prices' => $prices] )

    @include( 'partials.cta-form-submit-application' )

    @include( 'sale.detail.text' )

    @include( 'sale.detail.relevant' )

@endsection
