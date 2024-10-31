import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        screen: {
            lg: { max: '1999.99px'},
            md: { max: '991.99px'},
            sm: { max: '767.99px'},
            xs: { max: '479.99px'},
        },
        extend: {
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
                montserrat: ['Montserrat', 'sans-serif']
            },
            backgroundImage: {
                heroGradient:
                    'linear-gradient(94.59deg, #4923B4 2.39%, #E878CF 97.66%)'
            },
            colors: {
                blueviolet: '#5027B5',
                lightgray: '#666768'
            }
        },
    },

    plugins: [forms],
};
