@foreach( $items as $item )

    <li>
        @include( 'partials.loop.direction-item', [ 'item' => $item ] )
    </li>

@endforeach
