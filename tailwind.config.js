/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './www/**/*.{html,php}',
  ],
  theme: {
    extend: {
      backgroundImage: theme => ({
        'custom-image': "url('/img/goulash-bg.jpg')",
        'custom-image1': "url('/img/bg1.jpg')",

      }),
      fontFamily: {
        'roboto': ['Roboto', 'sans-serif'],
        'pacifico': ['Pacifico', 'cursive'],
        'noto-sans': ['Noto Sans Gurmukhi', 'sans-serif'],
      }
    },
  },
  variants: {},
  plugins: [],
}
