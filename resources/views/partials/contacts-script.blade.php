@if( $clinics->count() )

    <!-- Yandex Map -->
    <script src="//api-maps.yandex.ru/2.1/?apikey=3cdd55d0-f348-4d92-9fd9-9d5cc0cbb95f&lang=ru-RU"></script>
    <script>

        ymaps.ready(function () {
            var myMap = new ymaps.Map('map', {
                    center: [55.76117429168956,37.59976689843748],
                    zoom: 10,
                    controls: ['zoomControl']
                }, {
                    searchControlProvider: 'yandex#search'
                });

            @if( request()->routeIs('contact.clinic'))

                var Placemark_{{ app('request')->clinic->id }} = new ymaps.Placemark([{{ app('request')->clinic->detail->lat }},{{ app('request')->clinic->detail->lng }}], {
                    hintContent: '{{ app('request')->clinic->detail->address }}',
                    balloonContent: '{{ app('request')->clinic->detail->address }}'
                }, {
                    iconLayout: 'default#image',
                    iconImageHref: '{{ asset('build/assets/images/yandex-pin.png') }}',
                    iconImageSize: [40, 48],
                    iconImageOffset: [-20, -24]
                });
                myMap.geoObjects.add(Placemark_{{ app('request')->clinic->id }});

            @else

                @foreach( $clinics as $clinic )
                    var Placemark_{{ $clinic->id }} = new ymaps.Placemark([{{ $clinic->detail->lat }},{{ $clinic->detail->lng }}], {
                    hintContent: '{{ $clinic->detail->address }}',
                    balloonContent: '{{ $clinic->detail->address }}'
                    }, {
                        iconLayout: 'default#image',
                        iconImageHref: '{{ asset('build/assets/images/yandex-pin.png') }}',
                        iconImageSize: [40, 48],
                        iconImageOffset: [-20, -24]
                    });
                    myMap.geoObjects.add(Placemark_{{ $clinic->id }});
                @endforeach

            @endif

        });

    </script>
    <!-- End Yandex Map -->

@endif
