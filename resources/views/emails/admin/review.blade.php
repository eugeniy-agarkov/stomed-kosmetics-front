<h2>Новый отзыв</h2>

<div>
    ФИО: {{ $review->fio }}
</div>

<div>
    Телефон: {{ $review->phone }}
</div>

@if( $review->clinic )
    <div>
        Клиника: {{ $review->clinic->name }}
    </div>
@endif

@if( $review->doctor )
    <div>
        Доктор: {{ $review->doctor->name }}
    </div>
@endif

@if( $review->direction )
    <div>
        Услуга: {{ $review->direction->name }}
    </div>
@endif

<div>
    Отзыв: {{ $review->content }}
</div>
