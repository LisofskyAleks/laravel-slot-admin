@extends('layouts.app')

@section('title', 'SG Casino - Главная')

@section('content')

    @include('partials.main-banner')

    <h1>Список слотов</h1>

    {{-- Форма добавления слота --}}
    <form method="POST" action="{{ route('slots.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Название" required>
        <input type="text" name="slug" placeholder="Slug" required>
        <input type="url" name="image_url" placeholder="URL изображения" required>
        <button type="submit">Добавить слот</button>
    </form>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <hr>

    {{-- Вывод слотов --}}
    <div id="slots-list">
        @foreach ($slots as $slot)
            <div class="slot-item" id="slot-{{ $slot->id }}">
                <img src="{{ $slot->image_url }}" alt="{{ $slot->name }}">
                <p>{{ $slot->name }} ({{ $slot->slug }})</p>
                <button class="delete-slot-btn" data-id="{{ $slot->id }}">Удалить</button>
            </div>
        @endforeach
    </div>

@endsection

@push('scripts')
<script src="{{ asset('js/slots.js') }}"></script>
@endpush
