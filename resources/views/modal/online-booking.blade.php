<!-- Popup: Online запись -->
<div id="modalOnlineBooking" class="popup">

    <!-- Header -->
    <div class="popup__header">

        <!-- title -->
        <h2 class="popup__header-title">
            {{ __( 'Онлайн запись' ) }}
        </h2>
        <!-- end title -->

        <!-- excerpt -->
        <div class="popup__header-excerpt">
            {{ __( 'Выберите удобную дату и время приема. Наш менеджер с радостью свяжеться с вами и проконсультирует!' ) }}
        </div>
        <!-- end excerpt -->

    </div>
    <!-- End Header -->

    <!-- Content -->
    <div class="popup__content">

        <!-- Form -->
        <form action="{{ route('form.appointment') }}" method="post" class="form row ajaxForm">
            @csrf

            @isset( $direction )
                <input
                    type="hidden"
                    name="direction_id"
                    value="{{ $direction->id }}"
                >
            @endisset

            <input
                type="hidden"
                name="form"
                value="{{ \App\Enums\FormEnum::APPOINTMENTS }}"
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
            <div class="col-sm-12 form-group">

                <input
                    type="text"
                    name="date"
                    placeholder="{{ __( 'Дата приема' ) }}"
                    class="date"
                >

            </div>
            <!-- end col -->

            <!-- col -->
            <div class="col-sm-12 form-group">

                <input
                    type="text"
                    name="time"
                    placeholder="{{ __( 'Время приема' ) }}"
                    class="time"
                >

            </div>
            <!-- end col -->

            <!-- col -->
            <div class="col-sm-12">

                <button type="submit">
                    {{ __( 'Записаться на прием' ) }}
                </button>

            </div>
            <!-- end col -->

        </form>
        <!-- End Form -->

    </div>
    <!-- End Content -->

</div>
<!-- End Popup -->
