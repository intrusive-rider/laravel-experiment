import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                "black": "#161616",
            },
            fontFamily: {
                sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                "2xs": ".625rem",
            },
        },
    },
    plugins: [
        require("@tailwindcss/typography"),
        require('daisyui'),
    ],
};
