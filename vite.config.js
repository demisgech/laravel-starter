import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/bootstrap.min.css', 'resources/js/bootstrap.js'],
            refresh: true,
        }),
        // tailwindcss(),
    ],
});
