@if( $doctorsIsTop->count() )

    <!-- Doctors Last -->
    <section class="doctors_last">

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
                            {{ __( 'Наши врачи косметологи' ) }}
                        </h2>
                        <!-- End Title -->

                        <!-- Link -->
                        <div class="headpanel__archive">

                            <a href="{{ route('doctor') }}">
                                {{ __( 'Смотреть всех врачей' ) }}
                            </a>

                        </div>
                        <!-- End Link -->

                    </div>
                    <!-- End Headpanel -->

                    <!-- List -->
                    <ul class="doctors__list">

                        @foreach( $doctorsIsTop as $doctor )

                            @include( 'partials.loop.doctor-item', [ 'item' => $doctor ] )

                        @endforeach

                    </ul>
                    <!-- End List -->

                    <!-- Footer -->
                    <div class="doctors_last__footer">

                        <a href="{{ route('doctor') }}" class="btn btn-opacity">
                            {{ __( 'Смотреть всех врачей' ) }}
                        </a>

                    </div>
                    <!-- End Footer -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Doctors Last -->

@endif
