<li>

    <a href="{{ Storage::url('images/' . $gallery->image) }}" data-src="{{ Storage::url('images/' . $gallery->image) }}" data-fancybox="gallery">
        <img
            src="{{ Storage::url('thumbnail/' . $gallery->image) }}"
            alt="{{ $gallery->alt }}"
            title="{{ $gallery->title }}"
            class="img-responsive"
        >
    </a>

    @if( $gallery->name )
        <small>{{ $gallery->name }}</small>
    @endif

</li>
