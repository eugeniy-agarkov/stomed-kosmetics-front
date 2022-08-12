<li>

    <!-- Row -->
    <div class="reviews__listing-row">

        <!-- Row > Left -->
        <div class="reviews__listing-row-left">

            @if( $item->type == \App\Enums\ReviewsEnum::POSITIVE )

                <!-- rating -->
                <span class="reviews__listing-rating like">
                    {{ __( 'Отлично' ) }}
                </span>
                <!-- end rating -->

            @elseif( $item->type == \App\Enums\ReviewsEnum::NEGATIVE )

                <!-- rating -->
                <span class="reviews__listing-rating dislike">
                    {{ __( 'Плохо' ) }}
                </span>
                <!-- end rating -->

            @endif

            <!-- title -->
            <h5 class="reviews__listing-title">
                {{ $item->fio }}
            </h5>
            <!-- end title -->

            <!-- date -->
            <div class="reviews__listing-date">
                {{ Date::parse($item->published_at)->format('j F, Y года') }}
            </div>
            <!-- end date -->

        </div>
        <!-- End Row > Left -->

        <!-- Row > Right -->
        <div class="reviews__listing-row-right">

            <!-- excerpt -->
            <div class="reviews__listing-excerpt @if( \Illuminate\Support\Str::length($item->content) > 50 ) reviewsCollapse @endif">
                {!! $item->content !!}
            </div>
            <!-- end excerpt -->

            <!-- Footer -->
            <div class="reviews__listing-row-right-footer">
                @if( \Illuminate\Support\Str::length($item->content) > 50 )
                    <!-- collapse -->
                    <a
                        href="javascript:;"
                        class="reviews__listing-excerpt-collapse reviewsCollapseLink"
                        data-text-collapse="{{ __( 'Развернуть' ) }}"
                        data-text-collapsed="{{ __( 'Свернуть' ) }}"
                    >
                        {{ __( 'Развернуть' ) }}
                    </a>
                    <!-- end collapse -->
                @endif

                @if( $item->original )
                    <!-- original -->
                    <a href="{{ Storage::url('images/' . $item->original) }}" class="reviews__listing-original" target="_blank">
                        <img
                            src="{{ asset('build/assets/images/icons/writing.svg') }}"
                            alt="{{ __( 'Оригинал отзыва' ) }}"
                            title="{{ __( 'Оригинал отзыва' ) }}"
                        >
                        <span>{{ __( 'Смотреть оригинал отзыва' ) }}</span>
                    </a>
                    <!-- end original -->
                @endif
            </div>
            <!-- End Footer -->

        </div>
        <!-- End Row > Right -->

    </div>
    <!-- End Row -->

</li>
