<!-- Slide -->
<div class="swiper-slide">

    <!-- Item -->
    <a href="{{ Storage::url('images/' . $gallery->image) }}" data-src="{{ Storage::url('images/' . $gallery->image) }}" data-fancybox="gallery" class="contacts__gallery-slider-item">

        <img
            src="{{ Storage::url('thumbnail/' . $gallery->image) }}"
            alt="{{ $gallery->alt }}"
            title="{{ $gallery->title }}"
        >

    </a>
    <!-- End Item -->

</div>
<!-- End Slide -->
