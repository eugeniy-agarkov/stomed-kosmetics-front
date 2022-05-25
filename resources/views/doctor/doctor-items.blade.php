@foreach( $items as $item )

    @include( 'partials.loop.doctor-list-item', [ 'item' => $item ] )

@endforeach
