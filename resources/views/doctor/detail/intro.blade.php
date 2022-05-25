<!-- Intro Column -->
<section class="intro_column">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- Title -->
                <h1 class="intro_column__title mobile">
                    {{ isset($seo->h1) ? $seo->h1 : $doctor->name }}
                </h1>
                <!-- End Title -->

                @if( $doctor->excerpt )
                    <!-- Excerpt -->
                    <div class="intro_column__excerpt mobile">
                        {{ $doctor->excerpt }}
                    </div>
                    <!-- End Excerpt -->
                @endif

                <!-- Row -->
                <div class="intro_column__row">

                    <!-- Row > Left -->
                    <div class="intro_column__row-left">

                        <!-- Header -->
                        <div class="intro_column__header">

                            <!-- Title -->
                            <h1 class="intro_column__title desctope">
                                {{ isset($seo->h1) ? $seo->h1 : $doctor->name }}
                            </h1>
                            <!-- End Title -->

                            @if( $doctor->excerpt )
                                <!-- Excerpt -->
                                <div class="intro_column__excerpt desctope">
                                    {{ $doctor->excerpt }}
                                </div>
                                <!-- End Excerpt -->
                            @endif

                            <!-- List -->
                            <ul class="intro_column__footer-list">

                                @if( $doctor->experience )
                                    <li>

                                        <!-- icon -->
                                        <div class="icon">

                                            <img
                                                src="{{ asset('build/assets/images/icons/stag.svg') }}"
                                                alt="{{ __( 'Стаж' ) }}"
                                                title="{{ __( 'Стаж' ) }}"
                                            >

                                        </div>
                                        <!-- end icon -->

                                        <span><strong>{{ __( 'Стаж' ) }}:</strong> {{ $doctor->experience }}</span>

                                    </li>
                                @endif

                                @if( $doctor->category )
                                    <li>

                                        <!-- icon -->
                                        <div class="icon">

                                            <img
                                                src="{{ asset('build/assets/images/icons/pinple.svg') }}"
                                                alt="{{ __( 'Категория' ) }}"
                                                title="{{ __( 'Категория' ) }}"
                                            >

                                        </div>
                                        <!-- end icon -->

                                        <span><strong>{{ __( 'Категория' ) }}:</strong> {{ $doctor->category }}</span>

                                    </li>
                                @endif

                                @if( $doctor->reviews()->count() )
                                    <li>

                                        <!-- icon -->
                                        <div class="icon">

                                            <img
                                                src="{{ asset('build/assets/images/icons/paper.svg') }}"
                                                alt="{{ __( 'Отзывов' ) }}"
                                                title="{{ __( 'Отзывов' ) }}"
                                            >

                                        </div>
                                        <!-- end icon -->

                                        <span><strong>{{ __( 'Отзывов' ) }}:</strong> {{ $doctor->reviews()->count() }}</span>

                                    </li>
                                @endif


                                <li>

                                    <!-- icon -->
                                    <div class="icon">

                                        <img
                                            src="{{ asset('build/assets/images/icons/car.svg') }}"
                                            alt="{{ __( 'Вызов варча на дом' ) }}"
                                            title="{{ __( 'Вызов варча на дом' ) }}"
                                        >

                                    </div>
                                    <!-- end icon -->

                                    <span><strong>{{ __( 'Вызов варча на дом' ) }}:</strong> {{ $doctor->is_call_home == 1 ? __( 'Возможен' ) : __( 'Не возможен' ) }}</span>

                                </li>

                                @if( $doctor->degree )
                                    <li>

                                        <!-- icon -->
                                        <div class="icon">

                                            <img
                                                src="{{ asset('build/assets/images/icons/convert.svg') }}"
                                                alt="{{ __( 'Степень' ) }}"
                                                title="{{ __( 'Степень' ) }}"
                                            >

                                        </div>
                                        <!-- end icon -->

                                        <span><strong>{{ __( 'Степень' ) }}:</strong> {{ $doctor->degree }}</span>

                                    </li>
                                @endif

                            </ul>
                            <!-- End List -->

                        </div>
                        <!-- End Header -->

                        <!-- Footer -->
                        <div class="intro_column__footer visible-mobile">

                            <!-- Btn Group -->
                            <div class="intro_column__footer-btn">

                                <a href="#" class="btn btn-blue btn-not-rounded">
                                    {{ __( 'Оставить заявку' ) }}
                                </a>

                            </div>
                            <!-- End Btn Group -->

                        </div>
                        <!-- End Footer -->

                    </div>
                    <!-- End Row > Left -->

                    <!-- Row > Right -->
                    <div class="intro_column__row-right">

                        <!-- Order -->
                        <div class="doctors__order">

                            @if ( Storage::disk('public')->exists('thumbnail/' . $doctor->image) )
                                <!-- Image -->
                                <div class="doctors__order-image">

                                    <img
                                        src="{{ Storage::url('thumbnail/' . $doctor->image) }}"
                                        alt="{{ $doctor->name }}"
                                        title="{{ $doctor->name }}"
                                        class="img-responsive"
                                    >

                                </div>
                                <!-- End Image -->
                            @endif

                            <!-- Form -->
                            <div class="doctors__order-form">

                                <!-- Title -->
                                <h3 class="doctors__order-form-title">
                                    {{ __( 'Записаться на приём' ) }}:
                                </h3>
                                <!-- End Title -->

                                @include( 'doctor.forms.booking-time', [ 'item' => $doctor ] )

                            </div>
                            <!-- End Form -->

                        </div>
                        <!-- End Order -->

                    </div>
                    <!-- End Row > Right -->

                </div>
                <!-- End Row -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End Intro Column -->
