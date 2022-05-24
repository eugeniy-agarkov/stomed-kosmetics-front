@if( $prices->count() )

    <!-- Prices -->
    <section class="prices">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- Container Table -->
                    <div class="table-responsive">

                        <!-- Table -->
                        <table class="table prices__table">

                            <thead>
                            <tr>
                                <th>{{ __( 'Описание услуги' ) }}</th>
                                <th>{{ __( 'Клиника' ) }}</th>
                                <th>{{ __( 'Соимость' ) }}</th>
                                <th>{{ __( 'цена по акции' ) }}</th>
                                <th>{{ __( 'Условия акции' ) }}</th>
                                <th>{{ __( 'Выбрать услугу' ) }}</th>
                            </tr>
                            </thead>

                            <tbody>

                            @foreach( $prices as $price )
                                <tr>
                                    <td>

                                        <!-- Title -->
                                        <div class="prices__table-title">
                                            {{ $price->description }}
                                        </div>
                                        <!-- End Title -->

                                    </td>
                                    <td>
                                        @if( $price->clinic )
                                            <!-- Location -->
                                            <div class="prices__table-location">
                                                {{ $price->clinic->name }}
                                            </div>
                                            <!-- End Location -->
                                        @endif
                                    </td>
                                    <td>

                                        @if( $price->price )
                                            <!-- Price -->
                                            <div class="prices__table-price border">
                                                {{ $price->price }} <small>руб</small>
                                            </div>
                                            <!-- End Price -->
                                        @endif

                                    </td>
                                    <td>

                                        <!-- Price Sale -->
                                        <div class="prices__table-price border orange empty">

                                            {!! ($price->discount_price) ? $price->discount_price . ' <small>руб</small>' : '<b>-</b>' !!}

                                        </div>
                                        <!-- End Price Sale -->

                                    </td>
                                    <td>

                                        <!-- Description -->
                                        <div class="prices__table-description border orange empty">
                                            {!! ($price->condition) ? $price->condition : '<b>-</b>' !!}
                                        </div>
                                        <!-- End Description -->

                                    </td>
                                    <td>

                                        <!-- Btn -->
                                        <div class="prices__table-btn border">

                                            <a href="javascript:;" class="btn btn-blue btn-sm text-uppercase" data-src="#modalSubmitApplication-{{ $price->id }}" data-fancybox>
                                                {{ __( 'Заказать' ) }}
                                            </a>

                                            @include( 'modal.submit-application-direction', [ 'item' => $price ] )

                                        </div>
                                        <!-- End Btn -->

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                        <!-- End Table -->

                    </div>
                    <!-- End Container Table -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Prices -->

@endif
