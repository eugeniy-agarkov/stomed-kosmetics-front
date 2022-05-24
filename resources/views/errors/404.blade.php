@extends('layouts.app')

@section('meta')
    <title>{{ isset($seo->meta_title) ? $seo->meta_title : __( 'Ошибка 404' ) }}</title>
@endsection

@section('content')

    <!-- 404 -->
    <section class="error_page">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- Inner -->
                    <div class="error_page__inner">

                        <!-- image -->
                        <img
                            src="{{ asset('build/assets/images/404.png') }}"
                            alt="{{ __( 'Страница не найдена' ) }}"
                            title="{{ __( 'Страница не найдена' ) }}"
                            class="img-responsive"
                        >
                        <!-- end image -->

                        <!-- text -->
                        <div class="error_page__text">
                            Приносим свои извинения, данной страницы скорее всего уже не существует. Вы можете перейти на <a href="{{ route('home') }}">главную</a> или посмотреть <a href="{{ route('direction') }}">наши услуги</a>. Большое вам спасибо и будьте здоровы!
                        </div>
                        <!-- end text -->

                        <!-- footer -->
                        <div class="error_page__footer">

                            <a href="{{ route('home') }}" class="btn btn-blue">
                                {{ __( 'На главную' ) }}
                            </a>

                            <a href="{{ route('direction') }}" class="btn btn-opacity">
                                {{ __( 'Наши Услуги' ) }}
                            </a>

                        </div>
                        <!-- end footer -->

                    </div>
                    <!-- End Inner -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End 404 -->

@endsection
