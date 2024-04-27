/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        fontFamily: {
            body: ["Poppins"],
        },
        extend: {
            colors: {
                primary: "#f12711",
                "primary-dark": "#800C00",
                "primary-light": "#FF1900",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
    enabled: process.env.NODE_ENV === "production",
};
