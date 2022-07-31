@extends('layouts.app')

@section('meta')
    <title>{{ isset($seo->meta_title) ? $seo->meta_title : __( 'Контактная информация' ) }}</title>
@endsection

@section('content')

    @include( 'contact.breadcrumbs' )

    @include( 'contact.map' )

    @if( request()->routeIs('contact.clinic'))

        @include( 'contact.address' )

        @include( 'contact.faq' )

        @include( 'contact.callback' )

        @include( 'contact.gallery' )

    @endif

@endsection

@push('custom-scripts')
    @include( 'partials.contacts-script' )
@endpush

