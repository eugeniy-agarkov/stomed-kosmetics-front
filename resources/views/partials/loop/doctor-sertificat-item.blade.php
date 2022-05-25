@if ( Storage::disk('public')->exists('images/' . $item->image) )
    <!-- Item -->
    <a href="{{ Storage::url('images/' . $item->image) }}" data-src="{{ Storage::url('images/' . $item->image) }}" data-fancybox="sertificats" class="sert__list-item">

        <img
            src="{{ Storage::url('thumbnail/' . $item->image) }}"
            alt="{{ $item->alt }}"
            title="{{ $item->title }}"
            class="img-responsive"
        >

        @if( $item->name )
            <span>{{ $item->name }}</span>
        @endif

    </a>
    <!-- End Item -->
@endif
