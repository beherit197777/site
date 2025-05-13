<nav x-data="{ open: false }" class="bg-white shadow relative">
    <div class="container mx-auto flex justify-between items-center p-4">
        <a href="/" class="text-xl font-bold">Logo</a>

        <!-- Кнопка-тогглер для мобильных -->
        <button @click="open = !open" class="sm:hidden p-2 focus:outline-none" aria-label="Toggle menu">
            <!-- Иконка «гамбургер» -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Ссылки навигации -->
        <ul :class="{'block': open, 'hidden': !open}" class="hidden sm:flex space-x-4">
            <li><a href="#" class="block px-4 py-2 hover:text-blue-600">Кто такие Анонимные Алкоголики</a></li>
            <li><a href="#" class="block px-4 py-2 hover:text-blue-600">Новичку</a></li>
            <li><a href="#" class="block px-4 py-2 hover:text-blue-600">Литература АА</a></li>
            <li><a href="#" class="block px-4 py-2 hover:text-blue-600">Личные истории</a></li>
            <li><a href="#" class="block px-4 py-2 hover:text-blue-600">Спикерские</a></li>
            <li><a href="#" class="block px-4 py-2 hover:text-blue-600">Участникам группы</a></li>
            <li>
                <a href="{{ route('zoom.instructions') }}"
                   class="block px-4 py-2 text-red-600 hover:text-red-800 transition-colors"
                >
                    Как подключится в Zoom
                </a>
            </li>
        </ul>
    </div>
</nav>
