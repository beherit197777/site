/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            backgroundImage: {
                // переименовали ключи в более удобные
                tradition: "url('/images/7.png')",
                zoom:       "url('/images/zoom.png')",
                telegram:   "url('/images/telegram.png')",
                newbie:     "url('/images/newbie.png')",
                service:    "url('/images/service.png')",
                history:    "url('/images/history.png')",
            },
        },
    },
    plugins: [
        // …
    ],
}
