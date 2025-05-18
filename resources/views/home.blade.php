@extends('layouts.app')

@section('title', 'SG Casino - Главная')

@section('content')

    @include('partials.main-banner')

    <div class="slots">
        <div class="slots__description">
            <h1 class="slots__title">Top</h1>
            <div class="slots__more">
                <a href="{{ route('page.show', ['slug' => 'voir-tous']) }}">Voir tous</a>
            </div>
        </div>

        <ul id="slots__list" class="slots__list">
            @foreach ($slots as $slot)
                <li class="slots__item" id="slot-{{ $slot->id }}">
                    <a class="slots__link" href="{{ $slot->slug }}">
                        <img class="slots__img" src="{{ $slot->image_url }}" alt="{{ $slot->name }}">
                        <p class="slots__number">{{ $loop->iteration }}</p>
                    </a>
                    <button class="slots__btn_delete" data-id="{{ $slot->id }}" data-name="{{ $slot->name }}">
                        Delete
                    </button>
                </li>
            @endforeach
        </ul>

        <form method="POST" action="{{ route('slots.store') }}" class="slots__form">
            @csrf
            <input type="text" name="name" class="slots__input" placeholder="Name" required>
            <input type="text" name="slug" class="slots__input" placeholder="Slug" required>
            <input type="url" name="image_url" class="slots__input" placeholder="URL изображения" required>
            <button type="submit" class="slots__button slots__button_add">Add new slot</button>
        </form>

@endsection

@push('scripts')
@endpush
