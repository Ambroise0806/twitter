/** @type {import('tailwindcss').Config} */
    module.exports = {
        content: ['./**/*.{html,js}', './pages/**/*.{html,js}', './components/**/*.{html,js}', "./node_modules/flowbite/**/*.js",
    ],
    darkMode: 'class',
    
        theme: {

        extend: {},
        },
        plugins: [
            require('flowbite/plugin')
        ],
    }

