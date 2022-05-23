@foreach( $items as $item )

    @include( 'partials.loop.sale-item', [ 'item' => $item ] )

@endforeach
