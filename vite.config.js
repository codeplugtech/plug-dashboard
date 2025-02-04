import { defineConfig } from 'vite';
import laravel  from 'laravel-vite-plugin';
export default defineConfig({
    build: {
        rollupOptions: {
            output: {
                manualChunks: () => 'app',
            },
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/plug-dashboard.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: [
            {
                find: /^~(.*)$/,
                replacement: '$1',
            },
        ],
    },
});
