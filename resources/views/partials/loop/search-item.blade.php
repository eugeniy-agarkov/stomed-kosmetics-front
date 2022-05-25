<li>

    @if( $item->model == 'sales' )
        <!-- Badge -->
        <span class="badge orange">{{ __( 'акция' ) }}</span>
        <!-- End Badge -->
    @elseif( $item->model == 'blogs' )
        <!-- Badge -->
        <span class="badge green">{{ __( 'новость' ) }}</span>
        <!-- End Badge -->
    @elseif( $item->model == 'directions' )
        <!-- Badge -->
        <span class="badge blue">{{ __( 'услуга' ) }}</span>
        <!-- End Badge -->
    @endif

    <a href="@if( $item->model == 'sales' ) {{ route('sale.detail', [ 'sale' => $item->slug ]) }} @elseif( $item->model == 'blogs' ) {{ route('news.detail', [ 'blog' => $item->slug ]) }} @elseif( $item->model == 'directions' ) {{ route('direction.detail', [ 'direction' => $item->slug ]) }} @endif">

        <!-- Title -->
        <h5 class="search__result-list-title">
            {{ $item->name }}
        </h5>
        <!-- End Title -->

    </a>

    <!-- Excerpt -->
    <div class="search__result-list-excerpt">
        {!! \Illuminate\Support\Str::limit($item->excerpt, 200) !!}
    </div>
    <!-- End Excerpt -->

</li>
