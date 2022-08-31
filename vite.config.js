import { defineConfig } from 'vite';

export default defineConfig({
  root: 'front',
  server: {
    open: 'index.html',
  },
  build: {
    rollupOptions: {
      output: {
        entryFileNames: `[name].js`,
        chunkFileNames: `[name].js`,
        assetFileNames: `[name].[ext]`,
      },
    },
  },
});
