<!-- Mobile Panel -->
<section class="mobile_panel">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- list -->
                <ul class="mobile_panel__row">

                    <li>

                        <a href="javascript:;" class="btn mobilePanelFilter">

                            <img
                                src="{{ asset('build/assets/images/icons/filter.svg') }}"
                                alt="{{ __( 'Фильтр' ) }}"
                                title="{{ __( 'Фильтр' ) }}"
                                class="icon left"
                            >
                            <span>{{ __( 'Фильтр' ) }}</span>
                        </a>

                    </li>

                    <li>

                        <a href="javascript:;" class="btn mobilePanelSearch">

                            <img
                                src="{{ asset('build/assets/images/icons/search-mobile.svg') }}"
                                alt="{{ __( 'Поиск' ) }}"
                                title="{{ __( 'Поиск' ) }}"
                                class="icon left"
                            >
                            <span>{{ __( 'Поиск' ) }}</span>
                        </a>

                    </li>

                </ul>
                <!-- end list -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End Mobile Panel -->

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
                        placeholder="{{ __( 'Быстрый поиск по акциям' ) }}"
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

<!-- Sidebar -->
<section class="sidebar">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- Row -->
                <div class="sidebar__row">

                    <!-- Row > Left -->
                    <div class="sidebar__row-left mobilePanelFilterContent">

                        <!-- Header Mobile -->
                        <a href="javascript:;" class="sidebar__row-left-header mobilePanelFilter">

                            <span>{{ __( 'Фильтр' ) }}</span>
                            <img
                                src="{{ asset('build/assets/images/icons/close.svg') }}"
                                alt="{{ __( 'Фильтр' ) }}"
                                title="{{ __( 'Фильтр' ) }}"
                            >

                        </a>
                        <!-- End Header Mobile -->

                        <!-- Filter -->
                        <div class="filter">

                            <!-- Filter > Col -->
                            <div class="filter__col">

                                <!-- title -->
                                <h6 class="filter__col-title">
                                    {{ __( 'Сортировка' ) }}
                                </h6>
                                <!-- end title -->

                                <!-- Order -->
                                <div class="filter__order">

                                    <a
                                        href="javascript:;"
                                        class="btn btn-opacity filter__order-link orderLink"
                                    >

                                        <img
                                            src="{{ asset('build/assets/images/icons/order.svg') }}"
                                            alt=""
                                            title=""
                                            class="icon left"
                                        >

                                        @if( request()->has('order') )

                                            @if( request()->order == 'asc' )

                                                {{ __( 'От новых к старым' ) }}

                                            @elseif( request()->order == 'desc' )

                                                {{ __( 'От старых к новым' ) }}

                                            @endif

                                        @else

                                            {{ __( 'По умолчанию' ) }}

                                        @endif

                                    </a>

                                    <!-- list -->
                                    <ul class="filter__order-select orderSelect">

                                        <li>
                                            <a href="{{ url()->current() }}" class="@if( request()->order == '' ) active @endif">
                                                {{ __( 'По умолчанию' ) }}
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ request()->fullUrlWithQuery(['order' => 'asc']) }}" class="@if( request()->order == 'asc' ) active @endif">
                                                {{ __( 'От новых к старым' ) }}
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ request()->fullUrlWithQuery(['order' => 'desc']) }}" class="@if( request()->order == 'desc' ) active @endif">
                                                {{ __( 'От старых к новым' ) }}
                                            </a>
                                        </li>

                                    </ul>
                                    <!-- end list -->

                                </div>
                                <!-- End Order -->

                            </div>
                            <!-- End Filter > Col -->

                            @if( $categories->count() )

                                <!-- Filter > Col -->
                                <div class="filter__col">

                                    <!-- title -->
                                    <h6 class="filter__col-title">
                                        {{ __( 'Категории акций' ) }}
                                    </h6>
                                    <!-- end title -->

                                    <!-- Check Group -->
                                    <div class="filter__check">

                                        <!-- list -->
                                        <ul class="filter__check-list">

                                            @foreach( $categories as $cat )

                                                <li>

                                                    <input type="checkbox" id="check-{{ $cat->id }}" @if( $cat->id == $category->id ) checked @endif>
                                                    <a href="{{ ($cat->id == $category->id) ? route('sale') : route('sale.category', $cat) }}" for="check-{{ $cat->id }}">

                                                        <span>{{ $cat->name }}</span>

                                                    </a>

                                                </li>

                                            @endforeach

                                        </ul>
                                        <!-- end list -->

                                    </div>
                                    <!-- End Check Group -->

                                </div>
                                <!-- End Filter > Col -->

                            @endif

                        </div>
                        <!-- End Filter -->

                    </div>
                    <!-- End Row > Left -->

                    <!-- Row > Right -->
                    <div class="sidebar__row-right">

                        @if( $items->count() )

                            <!-- List -->
                            <ul class="news__list column-3">

                                @include( 'sale.sale-items', [ 'items' => $items ] )

                            </ul>
                            <!-- End List -->

                            @if ( $items->hasPages() )

                                <!-- Pagination -->
                                <div class="pagination">

                                    <a
                                        data-target=".news__list"
                                        data-last="{{ $items->lastPage() }}"
                                        href="{{ url()->current() }}"
                                        class="btn btn-opacity pagination__loadmore loadMore"
                                    >
                                        <svg class="icon left" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.375 8.49995C16.3777 10.2634 15.7885 11.9766 14.7017 13.3654C13.615 14.7541 12.0936 15.7379 10.3812 16.1591C8.66887 16.5804 6.86468 16.4147 5.25767 15.6887C3.65067 14.9626 2.33385 13.7182 1.51815 12.1548C0.702463 10.5914 0.435108 8.79947 0.758918 7.06605C1.08273 5.33263 1.97896 3.75805 3.30405 2.59455C4.62914 1.43105 6.3064 0.745956 8.06714 0.649026C9.82788 0.552095 11.5702 1.04893 13.015 2.05995L12.9187 1.77995C12.8445 1.55369 12.8632 1.30719 12.9706 1.09469C13.0781 0.882188 13.2656 0.721086 13.4919 0.646826C13.7181 0.572565 13.9646 0.591228 14.1771 0.69871C14.3896 0.806192 14.5507 0.993688 14.625 1.21995L15.5 3.84495C15.5434 3.97654 15.5549 4.11655 15.5336 4.25346C15.5123 4.39037 15.4588 4.52026 15.3775 4.63245C15.2928 4.75173 15.1795 4.84787 15.0481 4.91207C14.9166 4.97627 14.7712 5.00649 14.625 4.99995H12C11.7679 4.99995 11.5454 4.90776 11.3813 4.74367C11.2172 4.57957 11.125 4.35702 11.125 4.12495C11.1282 3.93975 11.19 3.76032 11.3017 3.61251C11.4133 3.46471 11.569 3.35614 11.7462 3.30245C10.5952 2.58306 9.23783 2.26638 7.88729 2.40216C6.53675 2.53794 5.26957 3.11849 4.28478 4.05261C3.3 4.98674 2.6534 6.22152 2.44654 7.56302C2.23969 8.90451 2.4843 10.2767 3.14196 11.4641C3.79962 12.6515 4.83307 13.5868 6.07998 14.1231C7.32689 14.6594 8.71662 14.7663 10.0309 14.427C11.3452 14.0878 12.5095 13.3216 13.341 12.2488C14.1726 11.1759 14.6242 9.8573 14.625 8.49995C14.625 8.26789 14.7172 8.04533 14.8813 7.88123C15.0454 7.71714 15.2679 7.62495 15.5 7.62495C15.7321 7.62495 15.9546 7.71714 16.1187 7.88123C16.2828 8.04533 16.375 8.26789 16.375 8.49995Z" fill="#19385E"/>
                                        </svg>
                                        Еще 10 новостей из {{ $items->total() }}
                                    </a>

                                </div>
                                <!-- End Pagination -->

                            @endif

                        @else

                            {{ __( 'Записей не найдено.' ) }}

                        @endif

                    </div>
                    <!-- End Row > Right -->

                </div>
                <!-- End Row -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End Sidebar -->
