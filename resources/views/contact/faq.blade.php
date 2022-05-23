<!-- FAQ -->
<section class="contacts__faq">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                @if( request()->routeIs('contact.clinic'))

                    @if( $faqs->count() )

                        <!-- List -->
                        <ul class="contacts__faq-list accordion">

                            @foreach( $faqs as $faq )

                                <li>

                                    <!-- Link -->
                                    <a href="javascript:;" class="contacts__faq-list-link accordionLink">
                                        <span>{{ $faq->question }}</span>
                                        <i></i>
                                    </a>
                                    <!-- End Link -->

                                    <!-- Body -->
                                    <div class="contacts__faq-list-body accordionBody">
                                        {!! $faq->answer !!}
                                    </div>
                                    <!-- End Body -->

                                </li>

                            @endforeach

                        </ul>
                        <!-- End List -->

                    @endif

                @else

                    <!-- List -->
                    <ul class="contacts__faq-list accordion">

                        @foreach( $clinics as $clinic )

                            @php( $faq = $clinic->faq->take(1)->first() )

                            @if( $faq )

                                <li>

                                    <!-- Link -->
                                    <a href="javascript:;" class="contacts__faq-list-link accordionLink">
                                        <span>{{ $faq->question }}</span>
                                        <i></i>
                                    </a>
                                    <!-- End Link -->

                                    <!-- Body -->
                                    <div class="contacts__faq-list-body accordionBody">
                                        {!! $faq->answer !!}
                                    </div>
                                    <!-- End Body -->

                                </li>

                            @endif

                        @endforeach

                    </ul>
                    <!-- End List -->

                @endif

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End FAQ -->
