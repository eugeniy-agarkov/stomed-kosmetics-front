<!-- Search Form -->
<section class="search_form visible-md">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- form -->
                <form action="{{ route('search') }}" method="get" class="search_form__form">

                    <input
                        type="text"
                        name="q"
                        placeholder="{{ __( 'Поиск' ) }}"
                        class="form-control"
                        value="{{ request()->q }}"
                    >

                    <button
                        type="submit"
                        class="btn btn-blue"
                    >{{ __( 'Поиск' ) }}</button>

                </form>
                <!-- end form -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End Search Form -->
