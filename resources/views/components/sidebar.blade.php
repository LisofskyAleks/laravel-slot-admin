

<aside class="sidebar">
    <div class="sidebar__wrapper">
        <nav>
            @foreach($menu as $group)
                <ul class="sidebar__list">
                    @foreach($group as $item)
                        <li class="sidebar__item">
                            <a href="{{ route($item['route']) }}">{{ $item['label'] }}</a>
                        </li>
                    @endforeach
                </ul>
            @endforeach
        </nav>

        <div class="sidebar__actions">
            <a class="sidebar__actions-link" href="#">
                <img src="{{ asset('images/france-flag-icon.svg') }}" alt="France">
                Français
            </a>
            <a class="sidebar__actions-link" target="_blank" href="{{ route('help') }}">
                Centre d'aide
            </a>
        </div>
    </div>
</aside>
