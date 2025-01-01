import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  build: {
    outDir: 'dist',
    rollupOptions: {
      input: './src/js/app.js',
      output: {
        entryFileNames: 'js/app.js'
      }
    },
    minify: true
  }
});