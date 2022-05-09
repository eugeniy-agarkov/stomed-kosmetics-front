@if( $directionCategories->count() )

    <!-- Categories -->
    <section class="categories">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                @foreach( $directionCategories as $category )
                    <!-- col -->
                    <div class="@if( $loop->iteration === 1 || $loop->iteration === 2 ) col-sm-12 col-md-6 col-lg-6 one @elseif( $loop->iteration === 3 ) col-sm-12 two @elseif( $loop->iteration === 4 || $loop->iteration === 5 || $loop->iteration === 6 ) col-sm-12 col-md-4 col-lg-4 three @endif">

                        <!-- Item -->
                        <div class="categories__item">

                            <!-- text -->
                            <div class="categories__item-text">

                                <!-- content -->
                                <div class="categories__item-text-content">

                                    <!-- title -->
                                    <h4 class="categories__item-title">
                                        {{ $category->name }}
                                    </h4>
                                    <!-- end title -->

                                    @php( $cats = $category->directions()->take(5)->get() )
                                    @if( $cats->count() )

                                        <!-- list -->
                                        <ul class="categories__item-list">

                                            @foreach( $cats as $item )
                                                <li>
                                                    <a href="#">{{ $item->name }}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                        <!-- end list -->

                                    @endif

                                </div>
                                <!-- end content -->

                                <!-- footer -->
                                <div class="categories__item-text-footer">

                                    <a href="#" class="btn btn-white">
                                        <span>{{ __( 'Смотреть все услуги' ) }}</span>
                                        <i>{{ __( 'Перейти' ) }}</i>
                                    </a>

                                </div>
                                <!-- end footer -->

                            </div>
                            <!-- end text -->

                            @if ( Storage::disk('public')->exists('images/' . $category->image) )
                                <img
                                    src="{{ Storage::url('images/' . $category->image) }}"
                                    alt="{{ $category->name }}"
                                    title="{{ $category->name }}"
                                    class="img-responsive"
                                >
                            @endif

                        </div>
                        <!-- End Item -->

                    </div>
                    <!-- end col -->
                @endforeach

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Categories -->

@endif
