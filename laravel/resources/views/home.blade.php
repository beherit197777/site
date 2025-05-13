@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    {{-- Заголовочный блок --}}
    <div class="w-full bg-white pb-8">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="whitespace-nowrap text-4xl sm:text-6xl font-bold uppercase mb-2 text-gray-900">
                АНОНИМНЫЕ АЛКОГОЛИКИ
            </h1>
            <h2 class="text-3xl sm:text-5xl font-semibold">
                <span class="text-green-300">Земляне</span>
                <span class="ml-4 text-gray-700 text-xl sm:text-2xl">Онлайн группа</span>
            </h2>
        </div>
    </div>

    {{-- Убираем -mt-16 и даём mt-12 --}}
    <div class="container mx-auto mt-12 pb-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- 2. Zoom --}}
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-2xl font-bold mb-4">Собрания в Zoom ежедневно в 20:00 (Мск)</h3>
                <a href="https://us02web.zoom.us/j/88474383951?pwd=..."
                   class="bg-gray-200 text-blue-600 px-4 py-2 rounded hover:bg-gray-300 transition inline-block">
                    Присоединиться
                </a>
                <p class="mt-4">
                    <a href="{{ route('zoom.instructions') }}"
                       class="text-blue-600 hover:underline">
                        Как подключиться в Zoom?
                    </a>
                </p>
            </div>

            {{-- 3. Telegram --}}
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-2xl font-bold mb-4">Собрания в Telegram ежедневно в 22:00 (Мск)</h3>
                <a href="https://t.me/your_telegram_group"
                   class="bg-blue-400 text-white px-4 py-2 rounded hover:bg-blue-500 transition inline-block">
                    Присоединиться
                </a>
                <p class="mt-4 text-gray-700">
                    Видеочат в разделе «Анонсы и объявления»
                </p>
            </div>

            {{-- 1. 7 Традиция --}}
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-2xl font-bold mb-4">7 Традиция</h3>
                <a href="{{ route('tradition') }}"
                   class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition inline-block">
                    Узнать больше
                </a>
            </div>

            {{-- 4. Новичку --}}
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-2xl font-bold mb-4">Новичку</h3>
                <ul class="list-disc list-inside space-y-2 text-gray-800">
                    @for($i = 1; $i <= 7; $i++)
                        <li>
                            <a href="{{ route('beginner.section', ['section' => $i]) }}"
                               class="hover:underline">
                                Раздел {{ $i }}
                            </a>
                        </li>
                    @endfor
                </ul>
            </div>

            {{-- 5. История Землян --}}
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition text-center">
                <h3 class="text-2xl font-bold mb-4">Служения</h3>
                <a href="{{ route('history') }}"
                   class="text-blue-600 hover:underline inline-block">
                    Читать дальше →
                </a>
            </div>

            {{-- 6. Истории выздаровления АА» --}}
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition text-center">
                <h3 class="text-2xl font-bold mb-4">Истории выздаровления АА»</h3>
                <a href="{{ route('book') }}"
                   class="text-blue-600 hover:underline inline-block">
                    Подробнее →
                </a>
            </div>

        </div>
    </div>
@endsection
