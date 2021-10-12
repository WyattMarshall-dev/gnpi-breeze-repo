const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                'hover-hover': {'raw': '(hover: hover)'},
          }
        },
    },

    // variants: {
    //     extend: {
    //         opacity: ['disabled'],
    //     },
    // },

    variants: {
        extend: {
          visibility: ["group-hover", "group-focus"],
        },
      },

    plugins: [require('@tailwindcss/forms')],
};
