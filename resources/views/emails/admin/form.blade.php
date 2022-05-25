<h2>Новая заявка: {{ \App\Enums\FormEnum::getName($form->form) }}</h2>

{!! $form->content !!}

<div>Имя: {{ $form->name }}</div>
<div>Телефон: {{ $form->phone }}</div>

@if( $form->form == \App\Enums\FormEnum::DOCTORS )


@endif
