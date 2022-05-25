<!-- form -->
<form action="{{ route('form.appointment') }}" method="post" class="ajaxForm">
    @csrf

    <input
        type="hidden"
        name="form"
        value="{{ \App\Enums\FormEnum::DOCTORS }}"
    >

    <input type="hidden" name="time" value="">
    <input type="hidden" name="doctor" value="{{ $item->name }}">
    <input type="hidden" name="doctor_id" value="{{ $item->id }}">

    <!-- Order -->
    <div class="doctors__grid-order">

        <!-- Header -->
        <div class="doctors__grid-order-header">

            <!-- Date -->
            <div class="doctors__grid-order-date">
                <span>{{ __( 'Дата' ) }}:</span>
                <input
                    type="text"
                    value="{{ now()->format('d/m/Y') }}"
                    class="doctorOrderDate"
                    name="date"
                >
            </div>
            <!-- End Date -->

            @if( $item->clinics()->count() )

                <!-- Locations -->
                <div class="doctors__grid-order-locations">
                    <span>{{ __( 'Клиника' ) }}:</span>
                    <input
                        type="text"
                        value="{{ $item->clinics->first()->name }}"
                        class="doctorOrderLocation"
                        name="location"
                    >

                    <!-- List -->
                    <ul class="doctors__grid-order-locations-list doctorOrderLocationList">

                        @foreach( $item->clinics as $clinic )
                            <li>
                                <a href="javascript:;">{{ $clinic->name }}</a>
                            </li>
                        @endforeach

                    </ul>
                    <!-- End List -->

                </div>
                <!-- End Locations -->

            @endif

        </div>
        <!-- End Header -->

        <!-- Content -->
        <div class="doctors__grid-order-content">

            <!-- List -->
            <ul class="doctors__grid-order-time">

                <li>

                    <a href="javascript:;" class="doctorOrderTimeItem">
                        <span>7:00</span>
                    </a>

                </li>

                <li>

                    <a href="javascript:;" class="doctorOrderTimeItem">
                        <span>7:30</span>
                    </a>

                </li>

                <li>

                    <a href="javascript:;" class="doctorOrderTimeItem">
                        <span>8:00</span>
                    </a>

                </li>

                <li>

                    <a href="javascript:;" class="doctorOrderTimeItem">
                        <span>8:30</span>
                    </a>

                </li>

                <li>

                    <a href="javascript:;" class="doctorOrderTimeItem">
                        <span>9:00</span>
                    </a>

                </li>

                <li>

                    <a href="javascript:;" class="doctorOrderTimeItem">
                        <span>9:30</span>
                    </a>

                </li>

                <li>

                    <a href="javascript:;" class="doctorOrderTimeItem">
                        <span>10:30</span>
                    </a>

                </li>

                <li class="hidden">

                    <a href="javascript:;" class="doctorOrderTimeItem">
                        <span>11:00</span>
                    </a>

                </li>

                <li class="hidden">

                    <a href="javascript:;" class="doctorOrderTimeItem">
                        <span>11:30</span>
                    </a>

                </li>

                <li class="hidden">

                    <a href="javascript:;" class="doctorOrderTimeItem">
                        <span>12:00</span>
                    </a>

                </li>

                <li class="drop doctorOrderTimeDrop">

                    <a href="javascript:;">
                        <img
                            src="{{ asset('build/assets/images/icons/arrow-bottom.svg') }}"
                            alt="{{ __( 'Развернуть' ) }}"
                            title="{{ __( 'Развернуть' ) }}"
                        >
                    </a>

                </li>

            </ul>
            <!-- End List -->

            <!-- Form -->
            <div class="doctors__grid-order-content-form">

                <input
                    type="text"
                    name="name"
                    placeholder="{{ __( 'Ваше имя' ) }}"
                >

                <input
                    type="tel"
                    name="phone"
                    placeholder="{{ __( 'Ваш номер телефона' ) }}"
                >

                <button type="submit">
                    {{ __( 'Отправить заявку' ) }}
                </button>

            </div>
            <!-- End Form -->

        </div>
        <!-- End Content -->

    </div>
    <!-- End Order -->

</form>
<!-- end form -->
