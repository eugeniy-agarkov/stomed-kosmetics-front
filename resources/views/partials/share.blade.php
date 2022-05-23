<!-- title -->
<span>{{ __( 'Поделиться' ) }}</span>
<!-- end title -->

<!-- list -->
<ul>

    <li>
        <a href="http://share.yandex.ru/go.xml?service=vkontakte&url={{ url()->current() }}&title={{ $item->name }}" target="_blank">
            <img
                src="{{ asset('build/assets/images/icons/vk-color.svg') }}"
                alt="{{ __( 'Вконтакте' ) }}"
                title="{{ __( 'Вконтакте' ) }}"
            >
        </a>
    </li>

    <li>
        <a href="https://api.whatsapp.com/send?text={{ $item->name }} {{ url()->current() }}" target="_blank">
            <img
                src="{{ asset('build/assets/images/icons/whatsapp-color.svg') }}"
                alt="{{ __( 'whatsapp' ) }}"
                title="{{ __( 'whatsapp' ) }}"
            >
        </a>
    </li>

    <li>
        <a href="https://telegram.me/share/url?url={{ url()->current() }}&text={{ $item->name }}" target="_blank">
            <img
                src="{{ asset('build/assets/images/icons/telegram-color.svg') }}"
                alt="{{ __( 'Telegram' ) }}"
                title="{{ __( 'Telegram' ) }}"
            >
        </a>
    </li>

</ul>
<!-- end list -->
