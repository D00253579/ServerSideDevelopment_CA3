const { colors } = require('laravel-mix/src/Log');

module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {},
    colors: {
      'darkBlue' : '#60648c', 
      'white' : '#fafafa',
      'lightBlue': '#eef2ff',
      'lightGreen': '#6ee7b7', 
      'lightRed': '#fca5a5',
      'lightPink' : '#fbcfe8'
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
