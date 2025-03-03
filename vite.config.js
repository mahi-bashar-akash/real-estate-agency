import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/js/visitor/app.js',
                'resources/js/admin/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        sourcemap: true,
        minify: 'esbuild',
    },
});
