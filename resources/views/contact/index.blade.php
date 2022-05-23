@extends('layouts.app')

@section('meta')
    <title>{{ isset($seo->meta_title) ? $seo->meta_title : __( 'Контактная информация' ) }}</title>
@endsection

@section('content')

    <!-- Breadcrumbs -->
    <section class="breadcrumbs">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- List -->
                    <ul class="breadcrumbs__list">

                        <li>

                            <a href="{{ route('home') }}">{{ __( 'Главная' ) }}</a>

                        </li>

                        @if( request()->routeIs('contact.clinic'))

                            <li>

                                <a href="{{ route('contact') }}">{{ __( 'Контакты' ) }}</a>

                            </li>

                            <li>
                                {{ $clinic->name }}
                            </li>

                        @else

                            <li>
                                {{ __( 'Контакты' ) }}
                            </li>

                        @endif

                    </ul>
                    <!-- End List -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Breadcrumbs -->

    @include( 'contact.map' )

    @include( 'contact.address' )

    @include( 'contact.faq' )

    @include( 'contact.callback' )

    @include( 'contact.gallery' )

@endsection

@include( 'partials.contacts-script' )
