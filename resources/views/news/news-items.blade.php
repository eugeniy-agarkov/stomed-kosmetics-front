@foreach( $items as $item )

    @include( 'partials.loop.news-item', [ 'item' => $item ] )

@endforeach
