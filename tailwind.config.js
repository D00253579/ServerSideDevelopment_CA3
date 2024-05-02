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
      'lightBlue': rgb(238, 242, 255)
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
