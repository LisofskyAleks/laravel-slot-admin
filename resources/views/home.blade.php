@extends('layouts.app')

@section('title', 'SG Casino - Главная')

@section('content')

    @include('partials.main-banner')

    <div class="slots">
        <div class="slots__description">
            <h1 class="slots__title">Top</h1>
            <div class="slots__more">
                <a href="#">Voir tous</a>
            </div>
        </div>

        <ul id="slots__list" class="slots__list">
            @foreach ($slots as $slot)
                <li class="slots__item" id="slot-{{ $slot->id }}">
                    <a class="slots__link" href="{{ $slot->slug }}">
                        <img class="slots__img" src="{{ $slot->image_url }}" alt="{{ $slot->name }}">
                        <p class="slots__number">{{ $loop->iteration }}</p>
                    </a>
                </li>
            @endforeach
        </ul>

        <form method="POST" action="{{ route('slots.store') }}">
            @csrf
            <input type="text" name="name" placeholder="Название" required>
            <input type="text" name="slug" placeholder="Slug" required>
            <input type="url" name="image_url" placeholder="URL изображения" required>
            <button type="submit">Добавить слот</button>
            <button class="slots__button_delete" data-id="{{ $slot->id }}">Удалить</button>
        </form>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

@endsection

@push('scripts')
<script src="{{ asset('js/slots.js') }}"></script>
@endpush
