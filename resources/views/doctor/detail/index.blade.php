@extends('layouts.app')

@section('meta')
    <title>{{ isset($seo->meta_title) ? $seo->meta_title : $doctor->name }}</title>
@endsection

@section('content')

    @include( 'doctor.detail.breadcrumbs' )

    @include( 'doctor.detail.intro' )

    @include( 'doctor.detail.text' )

    @include( 'doctor.detail.video' )

    @include( 'partials.cta-form-submit-application' )

    @include( 'doctor.detail.sertificats' )

    @include( 'partials.reviews-slider', [ 'reviewsLast' => $reviews, 'title' => __( 'Отзывы пациентов' ) ] )

    @include( 'partials.sale-last-slider', ['sales' => $sales, 'title' => __( 'Акции' )] )

@endsection
