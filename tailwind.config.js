/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './application/views/**/*.php',
        './application/views/**/*.html'
    ],
    theme: {
        extend: {
            fontFamily: {
                body: ['Inter', 'sans-serif'],
                sans: ['Inter', 'sans-serif'],
            }
        },
    },
    plugins: [],
}

