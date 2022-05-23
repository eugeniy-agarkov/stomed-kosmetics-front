<!-- Slide -->
<div class="swiper-slide">

    <!-- Item -->
    <a href="{{ route('sale.detail', $sale) }}" class="sales__list-item">

        <!-- Text -->
        <div class="sales__list-item-text">

            <!-- Header -->
            <div class="sales__list-item-header">

                <!-- SubTitle -->
                <div class="sales__list-item-subtitle">
                    {{ Date::parse($item->date_end)->format('до j F Y года') }}
                </div>
                <!-- End SubTitle -->

                @if( $item->name )
                    <!-- Title -->
                    <h5 class="sales__list-item-title">
                        {{ $item->name }}
                    </h5>
                    <!-- End Title -->
                @endif

            </div>
            <!-- End Header -->

            <!-- Footer -->
            <div class="sales__list-item-footer">

                <div class="timer" data-time="{{ $item->date_end }}"></div>

            </div>
            <!-- End Footer -->

        </div>
        <!-- End Text -->

        @if ( Storage::disk('public')->exists('thumbnail/' . $item->photo) )
            <!-- Image -->
            <div class="sales__list-item-image">

                <img
                    src="{{ Storage::url('thumbnail/' . $item->photo) }}"
                    alt="{{ $item->name }}"
                    title="{{ $item->name }}"
                    class="img-responsive"
                >

            </div>
            <!-- End Image -->
        @endif

    </a>
    <!-- End Item -->

</div>
<!-- End Slide -->
