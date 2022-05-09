@if( $clinics->count() )

    <!-- Contacts -->
    <section class="contacts">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- Headpanel -->
                    <div class="headpanel">

                        <!-- Title -->
                        <h2 class="headpanel__title">
                            {{ __( 'Адреса клиник' ) }}
                        </h2>
                        <!-- End Title -->

                        <a href="javascript:;" class="tab_mobile__link">
                            {{ __( 'Выбрать клинику' ) }}
                        </a>

                        <!-- Link -->
                        <div class="headpanel__archive tab_mobile__content">

                            @foreach( $clinics as $clinic )
                                <a href="{{ route('contact.clinic', $clinic) }}" class="btn btn-opacity">
                                    <svg class="icon left" width="21" height="25" viewBox="0 0 21 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.9167 3.07449C13.8176 -1.02461 7.18282 -1.02505 3.08328 3.07449C-1.01572 7.17344 -1.01636 13.8084 3.08328 17.9079L9.94568 24.7703C10.2519 25.0765 10.7482 25.0765 11.0544 24.7703L17.9168 17.9079C22.0157 13.809 22.0164 7.17407 17.9167 3.07449ZM13.8156 13.8067C11.9833 15.6391 9.01717 15.6395 7.18443 13.8067C5.35205 11.9743 5.35175 9.00832 7.18443 7.17569C9.01668 5.34335 11.9828 5.34301 13.8155 7.17569C15.6479 9.00798 15.6482 11.9741 13.8156 13.8067Z" fill="#19385E"/>
                                    </svg>
                                    {{ $clinic->short_name }}
                                </a>
                            @endforeach

                        </div>
                        <!-- End Link -->

                    </div>
                    <!-- End Headpanel -->

                    <!-- map -->
                    <div class="contacts__map" id="map">


                    </div>
                    <!-- end map -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Contacts -->

@endif

@include( 'partials.contacts-script' )
