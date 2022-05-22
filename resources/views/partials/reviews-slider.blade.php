@if( $reviewsLast->count() )

    <!-- Reviews Slider -->
    <section class="reviews_slider">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- inner -->
                    <div class="reviews_slider__inner">

                        <!-- title -->
                        <h2 class="reviews_slider__title">
                            {{ __( 'Отзывы нашей клиники' ) }}
                        </h2>
                        <!-- end title -->

                        <!-- archive -->
                        <div class="reviews_slider__archive">

                            <a href="{{ route('review') }}">
                                {{ __( 'Смотреть все' ) }}
                            </a>

                        </div>
                        <!-- end archive -->

                        <!-- slider -->
                        <div class="swiper swiperReviews">

                            <!-- Wrapper -->
                            <div class="swiper-wrapper">

                                @foreach( $reviewsLast as $review )

                                    <!-- Slide -->
                                    <div class="swiper-slide">

                                        <!-- item -->
                                        <div class="reviews__list-item">

                                            <!-- header -->
                                            <div class="reviews__list-item-header">

                                                @if( $review->type === 1 )
                                                    <img
                                                        src="{{ asset('build/assets/images/icons/like.svg') }}"
                                                        alt="{{ __( 'Позитивный' ) }}"
                                                        title="{{ __( 'Позитивный' ) }}"
                                                    >
                                                @else
                                                    <img
                                                        src="{{ asset('build/assets/images/icons/dislike.svg') }}"
                                                        alt="{{ __( 'Негативный' ) }}"
                                                        title="{{ __( 'Негативный' ) }}"
                                                    >
                                                @endif

                                                <span>{{ $review->fio }}</span>

                                            </div>
                                            <!-- end header -->

                                            <!-- content -->
                                            <div class="reviews__list-item-content">

                                                {{ $review->content }}

                                            </div>
                                            <!-- end content -->

                                            <!-- footer -->
                                            <div class="reviews__list-item-footer">

                                                {{ Date::parse($review->published_at)->format('j F, Y года') }}

                                            </div>
                                            <!-- end footer -->

                                        </div>
                                        <!-- end item -->

                                    </div>
                                    <!-- End Slide -->

                                @endforeach

                            </div>
                            <!-- End Wrapper -->

                            <!-- controls -->
                            <div class="reviews_slider__controls">

                                <!-- controls > left -->
                                <div class="reviews_slider__controls-left">

                                    <div class="swiper-button-prev"></div>

                                    <!-- Pagination -->
                                    <div class="swiper-pagination"></div>
                                    <!-- End Pagination -->

                                    <div class="swiper-button-next"></div>

                                </div>
                                <!-- end controls > left -->

                                <!-- controls > right -->
                                <div class="reviews_slider__controls-right">

                                    <a href="{{ route('review') }}" class="btn">
                                        {{ __( 'Оставить свой отзыв' ) }}
                                    </a>

                                    <a href="{{ route('review') }}" class="btn btn-transparent">
                                        {{ __( 'Смотреть все' ) }}
                                    </a>


                                </div>
                                <!-- end controls > right -->

                            </div>
                            <!-- end controls -->

                        </div>
                        <!-- end slider -->

                    </div>
                    <!-- end inner -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Reviews Slider -->

@endif
