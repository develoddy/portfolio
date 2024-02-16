import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/main.scss', // 'resources//main.scss', 'resources/css/app.css'
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        
    ],
});
