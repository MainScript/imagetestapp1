module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'rose-250': '#fcb8c0',
      },
      dropShadow: {
        'md': '0 2px 3px rgba(0, 0, 0, 0.5)',
        'cm': '0 1px 1px rgba(0, 0, 0, 0.66)',
      },
    },
  },
  plugins: [],
}
