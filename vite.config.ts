import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    outDir: 'dist',
    emptyOutDir: false,
    rollupOptions: {
      input: './src/js/app.js',
      output: {
        entryFileNames: 'js/app.js'
      }
    },
    minify: true
  }
});