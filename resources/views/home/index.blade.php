@extends('layouts.app')

@section('meta')
    <title>{{ $seo->meta_title ? $seo->meta_title : settings('company_name') }}</title>
@endsection

@section('content')

    @include( 'home.intro' )

    @include( 'home.advantages' )

    @include( 'home.directions' )

    @include( 'partials.doctors-is-top' )

    @include( 'partials.reviews-slider' )

    @include('partials.news-last')

    @include( 'home.video' )

    @include('partials.contacts')

@endsection
