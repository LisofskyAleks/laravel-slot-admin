<header class="header">
    <img class="header__mask" src="{{ asset('images/header-mask.svg') }}" alt="">
    <div class="container header__container">
        <div class="header__wrapper">
            <input type="checkbox" id="burger-toggle" class="header__burger" hidden>
            <label for="burger-toggle" class="header__burger-label">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <div class="header__logo">
                <a class="header__logo-link" href="{{ route('home') }}">
                    <img class="header__logo-picture" src="{{ asset('images/logo.png') }}" alt="SG Casino logo">
                </a>
            </div>
        </div>
        <div class="header__wrapper">
            <button class="header__button">
                Jeux, Catégories, Fournisseurs
            </button>
            <a class="header__link header__link-login" href="#">Se connecter</a>
            <a class="header__link header__link-register" href="#">S'inscrire</a>
        </div>
    </div>
</header>

@push('scripts')
    <script src="{{ asset('js/header.js') }}"></script>
@endpush
