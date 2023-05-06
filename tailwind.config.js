module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue'
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    fontFamily: {
        sans: ['Montserrat', 'sans-serif'],
        mono: ['Source Code Pro', 'ui-monospace']
    },

    extend: {},
  },
  variants: {
    scrollbar: ['rounded'],
    extend: {},
  },
  plugins: [
    require('tailwind-scrollbar'),
  ],
}
