/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      keyframes: {
        "slide-right": {
          "0%": {
            right: "-100%",
          },
          "100%": {
            right: "0",
          },
        },
      },
      animation: {
        "slide-right": "slide-right .6s forwards",
      },

      fontFamily: {
        cairo: ["Cairo"],
      },
    },
  },
  plugins: [],
}