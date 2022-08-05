<select class="doctorOrderDate" name="date" data-doctor="{{ $item->id }}">

    @foreach( $dates as $date => $values )
        <option value="{{ $date }}" @if( request()->input('date') == $date ) selected @endif>{{ Date::parse($date)->format('j M Y') }}</option>
    @endforeach

</select>
