@extends('layouts.app')

@section('title', 'Zoom по телефону')

@section('content')
    <div class="container mx-auto py-12">
        <h1 class="text-3xl font-bold mb-6">Как подключиться к Zoom по телефону</h1>
        <p class="mb-4">В зависимости от региона и страны выберите номер и позвоните — это бесплатно.</p>
        <p class="font-semibold mb-2">Идентификатор конференции: <span class="font-bold">884 7438 3951</span></p>
        <p class="font-semibold mb-4">Код доступа: <span class="font-bold">909999</span></p>

        <h2 class="text-2xl font-semibold mb-4">Российская Федерация</h2>
        <ul class="list-disc list-inside mb-6 space-y-1">
            <li>+7 499 951 6379</li>
            <li>+7 499 951 6380</li>
            <li>+7 812 426 8988</li>
            <li>+7 495 283 9788</li>
        </ul>

        <h2 class="text-2xl font-semibold mb-4">Соединённые Штаты</h2>
        <ul class="list-disc list-inside mb-6 space-y-1">
            <li>+1 346 248 7799 (Houston)</li>
            <li>+1 646 558 8656 (New York)</li>
            <li>+1 669 900 9128 (San Jose)</li>
            <li>+1 253 215 8782 (Tacoma)</li>
            <li>+1 301 715 8592 (Washington D.C.)</li>
            <li>+1 312 626 6799 (Chicago)</li>
        </ul>

        <!-- Добавьте остальные регионы аналогично -->

        <p class="mt-8">
            Найдите свой местный номер на официальном сайте Zoom:
            <a href="https://support.zoom.us/hc/ru/articles/201362663-International-dial-in-numbers"
               class="text-blue-600 hover:underline" target="_blank" rel="noopener"
            >
                Международные номера для исходящих соединений Zoom (Жми сюда)
            </a>
        </p>

        <div class="mt-8">
            <a href="{{ url()->previous() }}" class="text-gray-600 hover:underline">← Назад</a>
        </div>
    </div>
@endsection
