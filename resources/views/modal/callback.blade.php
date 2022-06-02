<!-- Popup: Обратный звонок -->
<div id="modalCallback" class="popup">

    <!-- Header -->
    <div class="popup__header">

        <!-- title -->
        <h2 class="popup__header-title">
            {{ __( 'Обратный звонок' ) }}
        </h2>
        <!-- end title -->

        <!-- excerpt -->
        <div class="popup__header-excerpt">
            {{ __( 'Наш менеджер с радостью вам перезвонит!' ) }}
        </div>
        <!-- end excerpt -->

    </div>
    <!-- End Header -->

    <!-- Content -->
    <div class="popup__content">

        <!-- Form -->
        <form action="{{ route('form.callback') }}" method="post" class="form row ajaxForm">
            @csrf

            <input
                type="hidden"
                name="form"
                value="{{ \App\Enums\FormEnum::FEEDBACK }}"
            >

            <input
                type="hidden"
                name="content"
                value="{{ __( 'Обратный звонок' ) }}"
            >

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
                    name="phone"
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
<!-- End Popup: Обратный звонок -->
