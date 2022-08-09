<li>

    <!-- Item -->
    <div class="doctors__grid-item">

        @if ( Storage::disk('public')->exists('thumbnail/' . $item->image) )
            <!-- Photo -->
            <a href="{{ route('doctor.show', $item) }}" class="doctors__grid-item-photo">

                <img
                    src="{{ Storage::url('thumbnail/' . $item->image) }}"
                    alt="{{ $item->name }}"
                    title="{{ $item->name }}"
                    class="img-responsive"
                >

            </a>
            <!-- End Photo -->
        @endif

        <!-- Content -->
        <div class="doctors__grid-item-content">

            <!-- Row -->
            <div class="doctors__grid-item-content-row">

                <!-- Row > Left -->
                <div class="doctors__grid-item-content-row-left">

                    @if( $item->clinics()->count() )
                        <!-- Locations -->
                        <ul class="doctors__grid-locations">

                            @foreach( $item->clinics as $clinic )

                                <li>
                                    {{ __( 'Косметология' ) }} {{ $clinic->name }}
                                </li>

                            @endforeach

                        </ul>
                        <!-- End Locations -->
                    @endif

                    <!-- Title -->
                    <h3 class="doctors__grid-title">
                        <a href="{{ route('doctor.show', $item) }}">{{ $item->name }}</a>
                    </h3>
                    <!-- End Title -->

                    @if( $item->excerpt )
                        <!-- Excerpt -->
                        <div class="doctors__grid-excerpt">
                            {{ $item->excerpt }}
                        </div>
                        <!-- End Excerpt -->
                    @endif

                    <!-- Characteristics -->
                    <ul class="doctors__grid-char">

                        @if( $item->experience )
                            <li>
                                {{ __( 'Стаж' ) }}: <span>{{ $item->experience }}</span>
                            </li>
                        @endif

                        @if( $item->category )
                            <li>
                                {{ __( 'Категория' ) }}: <span>{{ $item->category }}</span>
                            </li>
                        @endif

                        @if( $item->reviews()->count() )
                            <li>
                                {{ __( 'Отзывов' ) }}: <span>{{ $item->reviews()->count() }}</span>
                            </li>
                        @endif

                    </ul>
                    <!-- End Characteristics -->

                    <!-- Link -->
                    <a href="{{ route('doctor.show', $item) }}" class="doctors__grid-archive">
                        {{ __( 'Смотреть детальную информацию' ) }}
                    </a>
                    <!-- End Link -->

                    <!-- Link Mobile -->
                    <a href="#slot-doctor-mobile-{{ $item->id }}" class="doctors__grid-order-mobile" data-fancybox>
                        {{ __( 'Записаться' ) }}
                    </a>
                    <!-- End Link Mobile -->

                </div>
                <!-- End Row > Left -->

                <!-- Row > Right -->
                <div class="doctors__grid-item-content-row-right" id="slot-doctor-mobile-{{ $item->id }}">

                    @include( 'doctor.forms.booking-time' )

                </div>
                <!-- End Row > Right -->

            </div>
            <!-- End Row -->

        </div>
        <!-- End Content -->

    </div>
    <!-- End Item -->

</li>
