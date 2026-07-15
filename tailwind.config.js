/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./api/**/*.html",
    "./api/**/*.php",
    "./js/**/*.js",
    "./*.html",
    "./*.php"
  ],
  theme: {
    extend: {
      colors: {
        background: '#030712', // Very dark slate (gray-950)
        surface: '#111827',    // Component bg (gray-900)
        surface2: '#1f2937',   // Borders/Hover (gray-800)
        primary: '#38bdf8',    // Electric Cyan (sky-400)
        accent: '#34d399',     // Terminal Green (emerald-400)
        offwhite: '#f8fafc',
        slategray: '#94a3b8',
      },
      fontFamily: {
        display: ['"Space Grotesk"', 'sans-serif'],
        body: ['"Inter"', 'sans-serif'],
        mono: ['"JetBrains Mono"', 'monospace'],
      },
    },
  },
  plugins: [],
}
