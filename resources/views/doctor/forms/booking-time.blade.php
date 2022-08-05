<!-- form -->
<form action="{{ route('form.appointment') }}" method="post" class="form ajaxForm" data-slot-url="{{ route('doctor.slots', $item) }}" id="slot-doctor-{{ $item->id }}">
    @csrf

    @php( $firstClinic = $item->clinics->first() )

    <input
        type="hidden"
        name="form"
        value="{{ \App\Enums\FormEnum::DOCTORS }}"
    >

    <input type="hidden" name="time" value="">
    <input type="hidden" name="doctor" value="{{ $item->name }}">
    <input type="hidden" name="doctor_id" value="{{ $item->id }}">

    <input type="hidden" name="clinic" value="{{ $firstClinic->id }}">

    <!-- Order -->
    <div class="doctors__grid-order">

        <!-- Header -->
        <div class="doctors__grid-order-header">

            @php( $dates = $item->getSlotsDate($item->clinics->first()->code) )

            @if( $dates->count() )
                <!-- Date -->
                <div class="doctors__grid-order-date">
                    <span>{{ __( 'Дата' ) }}:</span>

                    <div class="doctorOrderDateAjax">

                        @include( 'partials.doctor.slots-date', [ 'item' => $item, 'dates' => $dates ] )

                    </div>

                </div>
                <!-- End Date -->
            @endif

            @if( $dates->count() && $item->clinics()->count() )

                <!-- Locations -->
                <div class="doctors__grid-order-locations">
                    <span>{{ __( 'Клиника' ) }}:</span>

                    <input
                        type="text"
                        value="{{ $firstClinic->name }}"
                        class="doctorOrderLocation"
                        name="location"
                    >

                    <!-- List -->
                    <ul class="doctors__grid-order-locations-list doctorOrderLocationList">

                        @foreach( $item->clinics as $clinic )
                            <li>
                                <a
                                    href="javascript:;"
                                    data-doctor="{{ $item->id }}"
                                    data-clinic="{{ $clinic->id }}"
                                >{{ $clinic->name }}</a>
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

            <div class="ajaxSlots">

                @if( $dates->count() && $item->clinics()->count() )
                    @include( 'doctor.doctor-slots', [ 'slots' => $item->getSlots(\Illuminate\Support\Carbon::parse($dates->first()[0]->from)->format('Y-m-d'), $item->clinics->first()->code) ] )
                @else
                    <!-- Empty -->
                    <div class="doctors__grid-order-time-empty">
                        {{ __( 'Свободного времени нет.' ) }}
                    </div>
                    <!-- End Empty -->
                @endif
            </div>

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
