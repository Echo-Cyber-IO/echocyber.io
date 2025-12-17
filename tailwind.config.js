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
        sans: ["Outfit", "system-ui", "sans-serif"],
        display: ["Space Grotesk", "system-ui", "sans-serif"],
        mono: ["JetBrains Mono", "monospace"],
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
        glow: "0 0 40px rgba(153, 0, 0, 0.3)",
        "glow-lg": "0 0 60px rgba(153, 0, 0, 0.4)",
        "glow-sm": "0 0 20px rgba(153, 0, 0, 0.2)",
      },
      colors: {
        crimson: {
          DEFAULT: "#990000",
          950: "#4D0000",
          900: "#660000",
          800: "#800000",
          700: "#990000",
          600: "#B31919",
          500: "#CC3333",
          400: "#E06666",
          300: "#F09999",
          200: "#F5CCCC",
          100: "#FAE6E6",
          50: "#FDF3F3",
        },
        echo: {
          950: "#0A0A0B",
          900: "#121214",
          800: "#1A1A1E",
          700: "#252529",
          600: "#3D3D44",
          500: "#5C5C66",
          400: "#8B8B96",
          300: "#B8B8C2",
          200: "#DCDCE3",
          100: "#EEEFF2",
          50: "#F7F7F9",
        },
      },
      backgroundImage: {
        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
        'hex-grid': `url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23990000' fill-opacity='0.08'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E")`,
      },
      animation: {
        'fade-in': 'fadeIn 0.6s ease-out forwards',
        'fade-in-up': 'fadeInUp 0.6s ease-out forwards',
        'fade-in-down': 'fadeInDown 0.6s ease-out forwards',
        'slide-in-left': 'slideInLeft 0.6s ease-out forwards',
        'slide-in-right': 'slideInRight 0.6s ease-out forwards',
        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
        'signal': 'signal 2s ease-out infinite',
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
        fadeInUp: {
          '0%': { opacity: '0', transform: 'translateY(20px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        fadeInDown: {
          '0%': { opacity: '0', transform: 'translateY(-20px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        slideInLeft: {
          '0%': { opacity: '0', transform: 'translateX(-20px)' },
          '100%': { opacity: '1', transform: 'translateX(0)' },
        },
        slideInRight: {
          '0%': { opacity: '0', transform: 'translateX(20px)' },
          '100%': { opacity: '1', transform: 'translateX(0)' },
        },
        signal: {
          '0%': { transform: 'scale(1)', opacity: '0.4' },
          '100%': { transform: 'scale(2)', opacity: '0' },
        },
      },
      aspectRatio: {
        "3/2": "3 / 2",
      },
    },
    fontSize: {
      xs: ".75rem",
      sm: ".875rem",
      base: "1rem",
      lg: "1.125rem",
      xl: "1.25rem",
      "2xl": "1.5rem",
      "3xl": "1.875rem",
      "4xl": "2.25rem",
      "5xl": "3rem",
      "6xl": "3.75rem",
      "7xl": "4.5rem",
      "8xl": "6rem",
    },
  },
};
