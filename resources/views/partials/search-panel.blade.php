<!-- Search Form -->
<section class="search_form">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- form -->
                <form action="{{ url()->current() }}" method="get" class="search_form__form">

                    <input
                        type="text"
                        name="search"
                        placeholder="{{ $title }}"
                        class="form-control"
                        value="{{ request()->search }}"
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
