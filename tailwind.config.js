const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily:
            {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors:
            {
                'dark': {
                    '50': '#f4f4f5',
                    '100': '#e9eaeb',
                    '200': '#c9cacd',
                    '300': '#a8aaaf',
                    '400': '#666a73',
                    '500': '#252a37',
                    '600': '#212632',
                    '700': '#1c2029',
                    '800': '#161921',
                    '900': '#12151b'
                }
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        require('tailwindcss-plugins/pagination'),
        require('@tailwindcss/forms')
    ],
};
