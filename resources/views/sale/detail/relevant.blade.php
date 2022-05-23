@if( $relevant->count() )

    @include( 'partials.sale-last-slider', ['sales' => $relevant, 'title' => __( 'Другие акции' )] )

@endif
