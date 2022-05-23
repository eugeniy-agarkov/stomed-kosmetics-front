<!-- CTA Application -->
<section class="cta_submit">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- Inner -->
                <div class="cta_submit__inner">

                    <!-- Title -->
                    <h3 class="cta_submit__title">
                        {{ __( 'Не нашли что искали? Оставьте заявку и мы поможем вам!' ) }}
                    </h3>
                    <!-- End Title -->

                    <!-- Container -->
                    <div class="cta_submit__form">

                        <!-- Form -->
                        <form action="{{ route('form.appointment') }}" method="post" class="row ajaxForm">
                            @csrf

                            <input
                                type="hidden"
                                name="form"
                                value="{{ \App\Enums\FormEnum::APPLICATION }}"
                            >

                            <!-- col -->
                            <div class="col-sm-4 col-md-4">

                                <label for="cta_1">
                                    {{ __( 'Имя' ) }} <span>*</span>
                                </label>
                                <input
                                    type="text"
                                    name="name"
                                    placeholder="{{ __( 'Ваше имя' ) }}"
                                    id="cta_1"
                                >

                            </div>
                            <!-- end col -->

                            <!-- col -->
                            <div class="col-sm-4 col-md-4">

                                <label for="cta_2">
                                    {{ __( 'Ваш номер телефона' ) }} <span>*</span>
                                </label>
                                <input
                                    type="tel"
                                    name="phone"
                                    placeholder="{{ __( 'Введите номер' ) }}"
                                    id="cta_2"
                                >

                            </div>
                            <!-- end col -->

                            <!-- col -->
                            <div class="col-sm-4 col-md-4">

                                <button type="submit">
                                    {{ __( 'Отправить заявку' ) }}
                                </button>

                            </div>
                            <!-- end col -->

                        </form>
                        <!-- End Form -->

                    </div>
                    <!-- End Container -->

                </div>
                <!-- End Inner -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End CTA Application -->
