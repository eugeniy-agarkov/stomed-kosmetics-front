@if( $slots )
    <!-- List -->
    <ul class="doctors__grid-order-time">

        @foreach( $slots as $slot )
            <li class="@if( $loop->iteration > 7 ) hidden @endif">

                <a href="javascript:;" class="doctorOrderTimeItem">
                    <span>{{ $slot }}</span>
                </a>

            </li>
        @endforeach

        @if( count($slots) > 7 )
            <li class="drop doctorOrderTimeDrop">

                <a href="javascript:;">
                    <img
                        src="{{ asset('build/assets/images/icons/arrow-bottom.svg') }}"
                        alt="{{ __( 'Развернуть' ) }}"
                        title="{{ __( 'Развернуть' ) }}"
                    >
                </a>

            </li>
        @endif

    </ul>
    <!-- End List -->
@endif
