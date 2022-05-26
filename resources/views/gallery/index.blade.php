@extends('layouts.app')

@section('meta')
    <title>{{ isset($seo->meta_title) ? $seo->meta_title : __( 'Галерея' ) }}</title>
@endsection

@section('content')

    @include( 'gallery.breadcrumbs' )

    @include( 'gallery.title' )

    @include( 'gallery.list' )

@endsection

@push('custom-scripts')
    @include( 'partials.contacts-script' )
@endpush
