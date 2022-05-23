@foreach( $reviews as $item )

    @include( 'partials.loop.review-item', [ 'item' => $item ] )

@endforeach
