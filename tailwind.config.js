const defaultTheme = require('tailwindcss');

module.exports = {
    
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            
        },
    },

    plugins: [/* require('@tailwindcss/forms'), require('@tailwindcss/typography') */],
};
