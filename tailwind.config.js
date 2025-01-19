/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./admin/**/*.{php,js}"],
  theme: {
    extend: {
      colors:{
        'primary-color': 'var(--primary-color)',
        'secondary-color': 'var(--secondary-color)',
      },
      fontFamily: {
        body: ['body-font'],
        title: ['title-font'],
      },
      backgroundImage: {
        'profile-background': 'linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(../../src/all-images/background-pix/profile-bg.jpg)',
      },
      screens: {
        'h-custom-screen-m': {'max': '850px'},
        'h-custom-screen-ml': {'max': '1011px'},
      },
      boxShadow: {
        'profile-border': ' 0px 0px 5px 5px #e2e2e2',
        'picture-box-border': '2px 2px 0px 0px #e2e2e2',
        'table-box-border': ' 0px 0px 4px 2px #e2e2e2',
      },
    },
  },
  plugins: [],
}