<!-- Popup: Добавить отзыв -->
<div id="modalSendReview" class="popup">

    <!-- Header -->
    <div class="popup__header">

        <!-- title -->
        <h2 class="popup__header-title">
            {{ __( 'Оставить свой отзыв' ) }}
        </h2>
        <!-- end title -->

        <!-- excerpt -->
        <div class="popup__header-excerpt">
            {{ __( 'Вы можете оставить свой отзыв, мы будем Вам очень признательны!' ) }}
        </div>
        <!-- end excerpt -->

    </div>
    <!-- End Header -->

    <!-- Content -->
    <div class="popup__content">

        <!-- Form -->
        <form action="{{ route('form.review') }}" method="post" class="form row ajaxForm">
            @csrf

            @isset( $direction )
                <input
                    type="hidden"
                    name="direction_id"
                    value="{{ $direction->id }}"
                >
            @endisset

            @isset( $doctor )
                <input
                    type="hidden"
                    name="doctor_id"
                    value="{{ $doctor->id }}"
                >
            @endisset

            <!-- col -->
            <div class="col-sm-12 form-group">

                <input
                    type="text"
                    name="fio"
                    placeholder="{{ __( 'Ваше имя' ) }}"
                >

            </div>
            <!-- end col -->

            <!-- col -->
            <div class="col-sm-12 form-group">

                    <textarea
                        name="content"
                        rows="5"
                        placeholder="{{ __( 'Текст отзыва' ) }}"
                    ></textarea>

            </div>
            <!-- end col -->

            <!-- col -->
            <div class="col-sm-12 form-group">

                <select
                    name="type"
                >
                    <option value="{{ \App\Enums\ReviewsEnum::POSITIVE }}" selected>{{ __( 'Всем доволен' ) }}</option>
                    <option value="{{ \App\Enums\ReviewsEnum::NEGATIVE }}">{{ __( 'Не доволен' ) }}</option>
                </select>

            </div>
            <!-- end col -->

            <!-- col -->
            <div class="col-sm-12">

                <button type="submit">
                    {{ __( 'Оставить отзыв' ) }}
                </button>

            </div>
            <!-- end col -->

        </form>
        <!-- End Form -->

    </div>
    <!-- End Content -->

</div>
<!-- End Popup: Добавить отзыв -->
