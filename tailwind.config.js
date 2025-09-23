import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            keyframes: {
                slideInRight: {
                    '0%': { opacity: '0', transform: 'translateX(50%)' },
                    '100%': { opacity: '1', transform: 'translateX(0)' }, 
                },
                slideInLeft: {
                    '0%': { opacity: '0', transform: 'translateX(-50%)' },
                    '100%': { opacity: '1', transform: 'translateX(0)' }, 
                },
            },
            animation: {
                slideInRight: 'slideInRight .5s ease-in-out forwards',
                slideInLeft: 'slideInLeft .5s ease-in-out forwards',
            },
        },
    },

    plugins: [forms],
};
