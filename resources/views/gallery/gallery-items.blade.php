@foreach( $galleries as $gallery )

    @if ( Storage::disk('public')->exists('thumbnail/' . $gallery->image) )

        @include( 'partials.loop.gallery-item', ['gallery' => $gallery] )

    @endif

@endforeach
