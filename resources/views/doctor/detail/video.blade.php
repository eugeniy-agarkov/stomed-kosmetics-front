@if( $doctor->video )

    <!-- Intro Video -->
    <section class="intro_video">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- Row -->
                    <div class="intro_video__row">

                        <!-- Row > Left -->
                        <div class="intro_video__row-left">

                            <!-- Video -->
                            <a href="{{ $doctor->video }}" data-src="{{ $doctor->video }}" data-fancybox="video" class="intro_video__video">

                                <!-- text -->
                                <div class="intro_video__video-text">

                                    <h3 class="intro_video__video-text-title">Пластическая хирургия</h3>

                                    <p>Если вы не готовы сейчас обратиться к пластическому хирургу, рекомендуем вам узнать больше о нитях Aptos – запишитесь на консультацию к нашим опытным дерматокосметологам.</p>

                                    <!-- author -->
                                    <div class="intro_video__author">

                                        <!-- author > photo -->
                                        <div class="intro_video__author-photo">

                                            <img
                                                src="{{ asset('build/assets/images/users/user-1.png') }}"
                                                alt="{{ __( 'Кулиев Сердар Атаевич' ) }}"
                                                title="{{ __( 'Кулиев Сердар Атаевич' ) }}"
                                                class="img-responsive"
                                            >

                                        </div>
                                        <!-- end author > photo -->

                                        <!-- author > text -->
                                        <div class="intro_video__author-text">

                                            <div>
                                                <small>{{ __( 'Хирург' ) }}</small>
                                                <span>{{ __( 'Кулиев Сердар Атаевич' ) }}</span>
                                            </div>

                                        </div>
                                        <!-- end author > text -->

                                    </div>
                                    <!-- end author -->

                                </div>
                                <!-- end text -->

                            </a>
                            <!-- End Video -->

                        </div>
                        <!-- End Row > Left -->

                        <!-- Row > Right -->
                        <div class="intro_video__row-right">

                            <!-- Text -->
                            <div class="intro_video__text">

                                <h3>3-х минутное видео о пластической хирургии</h3>

                                <p>Красота не имеет возраста, она подчиняется особым вневременным законам гармонии: открытый взгляд, высокие скулы, четкий овал лица и стройная, подтянутая фигура с упругими формами.</p>

                                <p>Теперь стать заметно моложе и замедлить процессы старения без оперативных вмешательств возможно благодаря нитям Aptos.</p>

                                <a href="{{ route('direction') }}" class="btn btn-opacity">
                                    {{ __( 'Смотреть все услуги' ) }}
                                </a>

                            </div>
                            <!-- End Text -->

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
    <!-- End Intro Video -->

@endif
