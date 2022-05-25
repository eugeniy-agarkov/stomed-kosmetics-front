@foreach( $results as $item )

    @include( 'partials.loop.search-item', [ 'item' => $item ] )

@endforeach
