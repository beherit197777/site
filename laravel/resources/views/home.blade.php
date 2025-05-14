@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    {{-- Заголовочный блок --}}
    <div class="w-full bg-white pb-8">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h1 class="whitespace-nowrap text-4xl sm:text-6xl font-bold uppercase mb-2 text-gray-900">
                АНОНИМНЫЕ АЛКОГОЛИКИ
            </h1>
            <h2 class="text-3xl sm:text-5xl font-semibold">
                <span class="text-green-300">Земляне</span>
                <span class="ml-4 text-gray-700 text-xl sm:text-2xl">Онлайн группа</span>
            </h2>
        </div>
    </div>

    {{-- Шесть карточек --}}
    <div class="container mx-auto mt-12 pb-12 px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- 1) 7 Традицияd --}}
            <div
                class="relative rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition"
                style="
    background: url('{{ asset('images/7.png') }}') no-repeat center/cover;
    height: 14rem;
  "
            >
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                <div class="relative p-6 h-full flex flex-col justify-between text-white">
                    <h3 class="text-2xl font-bold">7 Традиция</h3>
                    <a href="{{ route('tradition') }}"
                       class="inline-block bg-green-600 hover:bg-green-700 px-4 py-2 rounded"
                    >Узнать больше</a>
                </div>
            </div>

            {{-- 2) Zoom --}}
            <div
                class="relative rounded-lg overflow-hidden shadow-lg transition"
                style="background: url('{{ asset('images/zoom.png') }}') no-repeat center/cover; height: 14rem;"
            >
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                <div class="relative p-6 h-full flex flex-col justify-between text-white">
                    <h3 class="text-2xl font-bold">Собрания в Zoom ежедневно в 20:00 (Мск)</h3>
                    <a href="https://us02web.zoom.us/j/88474383951?pwd=..."
                       class="inline-block bg-gray-200 text-blue-600 hover:bg-gray-300 px-4 py-2 rounded"
                    >Присоединиться</a>
                    <p class="mt-2">
                        <a href="{{ route('zoom.instructions') }}"
                           class="underline hover:text-gray-200 text-sm"
                        >Как подключиться?</a>
                    </p>
                </div>
            </div>

            {{-- 3) Telegram --}}
            <div
                class="relative rounded-lg overflow-hidden shadow-lg transition"
                style="background: url('{{ asset('images/telegram.png') }}') no-repeat center/cover; height: 14rem;"
            >
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                <div class="relative p-6 h-full flex flex-col justify-between text-white">
                    <h3 class="text-2xl font-bold">Собрания в Telegram ежедневно в 22:00 (Мск)</h3>
                    <a href="https://t.me/your_telegram_group"
                       class="inline-block bg-blue-400 hover:bg-blue-500 px-4 py-2 rounded"
                    >Присоединиться</a>
                    <p class="mt-2 text-sm">В разделе «Анонсы и объявления»</p>
                </div>
            </div>

            {{-- 4) Новичку --}}
            <div
                class="relative rounded-lg overflow-hidden shadow-lg transition"
                style="background: url('{{ asset('images/newbie.png') }}') no-repeat center/cover; height: 14rem;"
            >
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                <div class="relative p-6 h-full overflow-auto text-white">
                    <h3 class="text-2xl font-bold mb-2">Новичку</h3>
                    <ul class="list-disc list-inside space-y-1 text-sm">
                        @for($i = 1; $i <= 7; $i++)
                            <li>
                                <a href="{{ route('beginner.section', ['section' => $i]) }}"
                                   class="hover:underline"
                                >Раздел {{ $i }}</a>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>

            {{-- 5) Служения --}}
            <div
                class="relative rounded-lg overflow-hidden shadow-lg transition"
                style="background: url('{{ asset('images/service.png') }}') no-repeat center/cover; height: 14rem;"
            >
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                <div class="relative p-6 h-full flex flex-col justify-center items-center text-center text-white">
                    <h3 class="text-2xl font-bold mb-4">Служения</h3>
                    <a href="{{ route('history') }}"
                       class="underline hover:text-gray-200"
                    >Читать дальше →</a>
                </div>
            </div>

            {{-- 6) Истории выздоровления АА --}}
            <p>Zoom-фон: {{ asset('images/zoom.png') }}</p>
            <div
                class="relative rounded-lg overflow-hidden shadow-lg transition"
                style="background: url('{{ asset('images/history.png') }}') no-repeat center/cover; height: 14rem;"
            >
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                <div class="relative p-6 h-full flex flex-col justify-center items-center text-center text-white">
                    <h3 class="text-2xl font-bold mb-4">Истории выздоровления АА</h3>
                    <a href="{{ route('book') }}"
                       class="underline hover:text-gray-200"
                    >Подробнее →</a>
                </div>
            </div>

        </div>
    </div>
@endsection
