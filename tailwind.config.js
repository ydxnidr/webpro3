/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './application/views/**/*.php',
        './application/views/**/*.html',
        'node_modules/preline/dist/*.js'
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
    plugins: [
        require('@tailwindcss/forms'),
        require('preline/plugin')
    ]
}