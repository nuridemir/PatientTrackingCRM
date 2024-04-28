import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/views/backend/assets/js/backend.js',
                'resources/views/frontend/assets/js/frontend.js',
            ],
            refresh: true,
        }),
    ],
});
