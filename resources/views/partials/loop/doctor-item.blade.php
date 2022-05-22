<li>

    <!-- Item -->
    <div class="doctors__list-item">

        <!-- photo -->
        <div class="doctors__list-item-photo">

            @if( $item->experience )
                <span class="badge">{{ $item->experience }}</span>
            @endif

            @if ( Storage::disk('public')->exists('thumbnail/' . $item->image) )
                <a href="{{ route('doctor.show', $item) }}">
                    <img
                        src="{{ Storage::url('thumbnail/' . $item->image) }}"
                        alt="{{ $item->name }}"
                        title="{{ $item->name }}"
                        class="img-responsive"
                    >
                </a>
            @endif

        </div>
        <!-- end photo -->

        <a href="{{ route('doctor.show', $item) }}">
            <!-- title -->
            <h5 class="doctors__list-item-title">
                {{ $item->name }}
            </h5>
            <!-- end title -->
        </a>

        @if( $item->excerpt )
            <!-- excerpt -->
            <p class="doctors__list-item-excerpt">
                {{ $item->excerpt }}
            </p>
            <!-- end excerpt -->
        @endif

    </div>
    <!-- End Item -->

</li>
