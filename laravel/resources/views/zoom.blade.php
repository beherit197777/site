@extends('layouts.app')

@section('title', 'Инструкция по подключению в Zoom')

@section('content')
    <div class="container mx-auto py-12">
        <h1 class="text-3xl font-bold mb-6">Как подключиться в Zoom</h1>
        <ul class="list-disc list-inside space-y-4 text-lg">

            <li><a href="https://zoom.us/download" target="_blank" class="text-blue-600 hover:underline">
                    1. Скачать и установить Zoom Client
                </a></li>
            <li><a href="/documents/zoom-setup.pdf" target="_blank" class="text-blue-600 hover:underline">
                    2. Инструкция по установке и базовым настройкам
                </a></li>
            <li>
                <a
                    href="https://us02web.zoom.us/j/88474383951?pwd=U29oWFpkdDduczduTnAybENsRThBZz09"
                    class="text-blue-600 hover:underline"
                    target="_blank"
                    rel="noopener"
                >
                    3. Прямая ссылка на текущую группу
                </a>
                <p class="text-lg text-blue-400 mb-2">
                    Друзья, если у Вас не получается пройти на зум конференцию по ссылке, Вы можете ввести в своем зуме: Идентификатор конференции: 871 036 8492, Код доступа 9999
                </p>
            </li>
            <a href="{{ route('zoom.phone') }}"
               class="block px-4 py-2 text-blue-600 hover:underline transition-colors"
            >
                Как подключиться к зум-конференции через мобильную связь без интернета
            </a>
        </li>

            <li><a href="https://support.zoom.us/hc/ru/articles/201362003" target="_blank" class="text-blue-600 hover:underline">
                    4. Официальная справка Zoom на русском
                </a></li>
            <li><a href="/faq#zoom" class="text-blue-600 hover:underline">
                    5. Часто задаваемые вопросы по Zoom
                </a></li>
        </ul>
        <div class="mt-8">
            <a href="{{ url()->previous() }}" class="text-gray-600 hover:underline">← Назад</a>
        </div>
    </div>
@endsection
