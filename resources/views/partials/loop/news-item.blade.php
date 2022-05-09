<li>

    <!-- Item -->
    <div class="news__list-item">

        @if ( Storage::disk('public')->exists('thumbnail/' . $item->photo) )
        <a href="{{ route('news.detail', $item) }}">
            <img
                src="{{ Storage::url('thumbnail/' . $item->photo) }}"
                alt="{{ $item->name }}"
                title="{{ $item->name }}"
                class="img-responsive"
            >
        </a>
        @endif

        <!-- labels -->
        <ul class="news__list-item-labels">

            <li>
                <span>{{ Date::parse($item->published_at)->format('j F Y') }}</span>
            </li>

            <li>
                <span>{{ __( 'Новости' ) }}</span>
            </li>

        </ul>
        <!-- end labels -->

        <a href="{{ route('news.detail', $item) }}">
            <!-- title -->
            <h5 class="news__list-item-title">
                {{ $item->name }}
            </h5>
            <!-- end title -->
        </a>

    </div>
    <!-- End Item -->

</li>
