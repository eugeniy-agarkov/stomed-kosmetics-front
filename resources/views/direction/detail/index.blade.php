@extends('layouts.app')

@section('meta')
    <title>{{ isset($seo->meta_title) ? $seo->meta_title : $direction->name }}</title>
@endsection

@section('content')

    @include( 'direction.detail.breadcrumbs' )

    @include( 'direction.detail.intro' )

    @include( 'direction.detail.excerpt' )

    @include( 'direction.detail.text' )

    @include( 'partials.price-table', ['prices' => $prices] )

    @include( 'partials.cta-form-submit-application' )

    @include( 'direction.detail.gallery' )

    @include( 'partials.reviews-slider', [ 'reviewsLast' => $reviews, 'title' => $direction->name . ', ' . __( 'отзывы о процедуре' ) ] )

    @include( 'partials.doctors-is-top' )

@endsection
