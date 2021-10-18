const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/components/**/*.vue',
    ],

    theme: {
        extend: {
            maxWidth: {
                'contained': '1700px',
            },

            fontSize: {
                'base-heading-size': '20px',
                'base-copy-size': '18px',
            },

            colors: {
                davysGrey: '#504F4Eff',
                greyBlue: '#666772',
                cgBlue: '#007FACff',
                cgBlueDark: '#0f3953',
                honoluluBlue: '#1D6D9Fff',
                culturedWhiteOff: '#F6F6F6ff',
                culturedWhite: '#EFF0F2ff',
                culturedBlue: '#e6f3fb',
                offBlack: '#303136',
                offGray: '#e3e4e6',

                success: '#00c97a',
                error: '#ea0000',

            },

            screens: {
                xs: '414px',
                sm: '640px',
                md: '768px',
                lg: '1024px',
                xl: '1280px',
                xxl: '1440px',
                xxxl: '1600px',
            },
        },

        fontFamily: {
            proxReg: [
                'ProximaNova-Regular',
                'sans-serif',
            ],
            proxSemi: [
                'ProximaNova-Semibold',
                'sans-serif',
            ],
            proxBold: [
                'ProximaNova-Bold',
                'sans-serif',
            ],
        },
        container: {
            center: true,
        },
    },


    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
