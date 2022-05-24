@foreach( $items as $item )

    @include( 'partials.loop.direction-item', [ 'item' => $item ] )

@endforeach
