
module.exports = {
  purge: {
    enabled: !process.env.ROLLUP_WATCH,
    content: ['./public/index.html', './src/**/*.svelte'],
    options: {
      defaultExtractor: content => [
        ...(content.match(/[^<>"'`\s]*[^<>"'`\s:]/g) || []),
        ...(content.match(/(?<=class:)[^=>\/\s]*/g) || []),
      ],
    },
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        gray: {
          DEFAULT: '#1E1E1E',
          light: '#2E2E2E',
        },
        green: {
          DEFAULT: '#6A9955'
        },
        blue: {
          light: '#9CDCFE'
        },
        turquoise: {
          DEFAULT: '#4EC9B0'
        },
        cream: {
          DEFAULT: '#DCDCAA'
        },
        purple: {
          DEFAULT: '#C586C0'
        }
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
  corePlugins: {
    outline: false,
  }
}
