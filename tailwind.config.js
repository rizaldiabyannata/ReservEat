/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "peachy-brown": "#F2CA99",
            },
            fonts: {
                primary: ["Montserrat", "sans-serif"],
                secondary: ["Quicksand", "serif"],
            },
        },
    },
    plugins: [],
};
