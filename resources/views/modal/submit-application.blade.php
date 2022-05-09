<!-- Popup: Оставить заявку -->
<div id="modalSubmitApplication" class="popup">

    <!-- Header -->
    <div class="popup__header">

        <!-- title -->
        <h2 class="popup__header-title">
            {{ __( 'Оставить заявку' ) }}
        </h2>
        <!-- end title -->

        <!-- excerpt -->
        <div class="popup__header-excerpt">
            {{ __( 'Наш менеджер с радостью свяжеться с вами и проконсультирует!' ) }}
        </div>
        <!-- end excerpt -->

    </div>
    <!-- End Header -->

    <!-- Content -->
    <div class="popup__content">

        <!-- Form -->
        <form action="" method="post" class="row">

            <!-- col -->
            <div class="col-sm-12 form-group">

                <input
                    type="text"
                    name="name"
                    placeholder="{{ __( 'Ваше имя' ) }}"
                >

            </div>
            <!-- end col -->

            <!-- col -->
            <div class="col-sm-12 form-group">

                <input
                    type="tel"
                    name="tel"
                    placeholder="+7 495 000-00-00"
                    class="intl-phone"
                >

            </div>
            <!-- end col -->

            <!-- col -->
            <div class="col-sm-12">

                <button type="submit">
                    {{ __( 'Оставить заявку' ) }}
                </button>

            </div>
            <!-- end col -->

        </form>
        <!-- End Form -->

    </div>
    <!-- End Content -->

</div>
<!-- End Popup -->
