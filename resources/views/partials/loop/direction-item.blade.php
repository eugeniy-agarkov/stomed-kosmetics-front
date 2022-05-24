<li>

    <!-- Item -->
    <a href="{{ route('direction.detail', $item) }}" class="services__list-item">

        <!-- text -->
        <div class="services__list-item-text">

            <!-- title -->
            <h5 class="services__list-item-title">
                {{ $item->name }}
            </h5>
            <!-- end title -->

            <div>

                @if( $item->prices()->count() > 1 )
                    <span>{{ __( 'Цена от' ) }}: {{ $item->minPrice() }} руб.</span>
                @elseif( $item->prices()->count() == 1 )
                    <span>{{ __( 'Цена' ) }}: {{ $item->minPrice() }} руб.</span>
                @endif

                @if( $item->time_spending )
                    <small>{{ __( 'Продолжительность' ) }}: {{ $item->time_spending }}</small>
                @endif

            </div>

        </div>
        <!-- end text -->

        @if ( Storage::disk('public')->exists('thumbnail/' . $item->image) )
            <!-- image -->
            <div class="services__list-item-image">

                <img
                    src="{{ Storage::url('thumbnail/' . $item->image) }}"
                    alt="{{ $item->name }}"
                    title="{{ $item->name }}"
                    class="img-responsive"
                >

            </div>
            <!-- end image -->
        @endif

    </a>
    <!-- End Item -->

</li>
