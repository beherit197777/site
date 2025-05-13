@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    {{-- Фоновое изображение на всю страницу --}}
    <div
        class="fixed inset-0 -z-10 bg-fixed bg-cover bg-center"
        style="background-image: url('/images/earth.jpg');"
    ></div>

    <section
        class="relative container mx-auto flex flex-col items-center justify-start min-h-screen pt-20 lg:pt-32 text-center text-gray-100 z-10"
    >
        {{-- Заголовки и прочее --}}
        <h1 class="text-blue-900 text-6xl sm:text-7xl font-bold uppercase -mt-8 mb-8">
            Анонимные Алкоголики
        </h1>
        <h2 class="text-5xl sm:text-6xl font-extrabold text-green-300 my-2">
            Земляне
        </h2>
        <h3 class="text-xl font-semibold text-gray-200 mb-4">
            Онлайн группа
        </h3>
        <span class="inline-block bg-gray-200 text-blue-600 px-4 py-2 rounded-lg mb-6">
        7 Традиция
    </span>
        <p class="text-lg text-blue-400 mb-2">
            Ежедневно в 20:00 в Zoom по Москве
        </p>
        <p class="text-lg text-blue-400 mb-2">
            Ежедневно в 22:00 в Telegram по Москве
        </p>
        {{-- Контейнер для двух кнопок --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mt-6"
             x-data="{ zoomTooltip: false, telegramTooltip: false }"
        >
            {{-- Кнопка Zoom --}}
            <div class="relative inline-block"
                 @mouseenter="zoomTooltip = true"
                 @mouseleave="zoomTooltip = false"
            >
                <a href="#"
                   class="inline-flex items-center bg-gray-200 text-blue-600 px-6 py-3 rounded-lg shadow hover:bg-gray-300 transition"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M15 10.5V6a2 2 0 0 0-2-2H5a2 …" />
                    </svg>
                    <span class="ml-2">Подключиться в Zoom</span>
                </a>

                {{-- Tooltip для Zoom --}}
                <div
                    x-show="zoomTooltip"
                    x-transition
                    class="absolute bottom-full mb-2 left-1/2 transform -translate-x-1/2 whitespace-nowrap
             bg-gray-800 text-white text-sm px-3 py-1 rounded shadow-lg pointer-events-none"
                    style="display: none;"
                >
                    Ссылка появится за 15–20 минут до начала
                </div>
            </div>

            {{-- Кнопка Telegram --}}
            <div class="relative inline-block"
                 @mouseenter="telegramTooltip = true"
                 @mouseleave="telegramTooltip = false"
            >
                <a href="#"
                   class="inline-flex items-center bg-blue-400 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-500 transition"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21 4.5L3.5 10.7l4.3 1.3 1.3 4.1 2.4-2.2 4.9 3.6z" />
                    </svg>
                    <span class="ml-2">Подключиться в Telegram</span>
                </a>

                {{-- Tooltip для Telegram --}}
                <div
                    x-show="telegramTooltip"
                    x-transition
                    class="absolute bottom-full mb-2 left-1/2 transform -translate-x-1/2 whitespace-nowrap
             bg-gray-800 text-white text-sm px-3 py-1 rounded shadow-lg pointer-events-none"
                    style="display: none;"
                >
                    Видеочат в разделе «Анонсы и объявления»
                </div>
            </div>
        </div>
@endsection
