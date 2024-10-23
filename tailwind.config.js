/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './application/views/**/*.php',
        './application/views/**/*.html'
    ],
    theme: {
        extend: {
            backgroundImage: {
                'pattern-blue': "url('/assets/img/patterns/pattern-blue.png')"
            },
            fontFamily: {
                body: ['Inter', 'sans-serif'],
                sans: ['Inter', 'sans-serif'],
            }
        },
    },
    plugins: [],
}

