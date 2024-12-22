import { defineConfig } from 'vite';

export default defineConfig({
    root: 'src',
    build: {
        outDir: '../dist',
        emptyOutDir: true,
        manifest: true,
        rollupOptions: {
            input: './src/main.js',
            output: {
                assetFileNames: 'assets/[name].[hash][extname]',
            },
        },
    },
    server: {
        watch: {
            usePolling: true,
            interval: 100,
            ignored: ['**/node_modules/**']
        },
        hmr: true,
    },
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: '@use "./scss/variables.scss" as *;'
            },
        },
    },
});