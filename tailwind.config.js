const defaults = require("tailwindcss/defaultTheme");

module.exports = {
  content: require("fast-glob").sync([
    "source/**/*.html",
    "source/**/*.md",
    "source/**/*.js",
    "source/**/*.php",
    "source/**/*.vue",
  ]),
  options: {
    safelist: [/language/, /hljs/, /mce/],
  },
  theme: {
    extend: {
      fontFamily: {
        sans: ["Inter var", "sans-serif"],
        roboto: ["Roboto Slab", "sans-serif"],
      },
      lineHeight: {
        normal: "1.6",
        loose: "1.75",
      },
      maxWidth: {
        "8xl": "88rem",
      },
      boxShadow: {
        search:
          "0 -1px 27px 0 rgba(0, 0, 0, 0.04), 0 4px 15px 0 rgba(0, 0, 0, 0.08)",
      },
      colors: {
        crimson: {
          DEFAULT: "#990000",
          900: "#A31010",
          800: "#AD2323",
          700: "#B83737",
          600: "#C24E4E",
          500: "#CC6666",
          400: "#D68181",
          300: "#E09D9D",
          200: "#EBBCBC",
          100: "#F5DCDC",
        },
        echogray: {
          DEFAULT: "#58423e",
          900: "#6A524D",
          800: "#7A615D",
          700: "#8B726E",
          600: "#9C8480",
          500: "#AC9692",
          400: "#BDA9A6",
          300: "#CDBEBB",
          200: "#DED3D1",
          100: "#EEE8E7",
        },
      },
      aspectRatio: {
        "3/2": "3 / 2",
      },
    },
    fontSize: {
      xs: ".8rem",
      sm: ".925rem",
      base: "1rem",
      lg: "1.125rem",
      xl: "1.25rem",
      "2xl": "1.5rem",
      "3xl": "1.75rem",
      "4xl": "2.125rem",
      "5xl": "2.625rem",
      "6xl": "10rem",
    },
  },
};
