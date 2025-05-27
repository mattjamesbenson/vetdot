import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/scss/front.scss',
        'resources/js/front.js',
      ],
      refresh: true,
    }),
    tailwindcss(),
  ],
  css: {
    preprocessorOptions: {
      scss: {
        additionalData: `@import "bootstrap/scss/bootstrap";`,
      },
    },
  },
  server: {
    hmr: {
      host: 'vetorg.test',
      watch: {
        usePolling: true,
      },
    },
  },
});