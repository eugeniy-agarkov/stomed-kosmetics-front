<!-- Address -->
<section class="contacts__address">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- Text -->
                <div class="contacts__address-text">

                    @if( request()->routeIs('contact.clinic'))

                        {{ $clinic->detail->address }}

                    @else

                        {{ settings('general_address') }}

                    @endif

                </div>
                <!-- End Text -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End Address -->
