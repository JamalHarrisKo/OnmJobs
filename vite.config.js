import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
//import vue
import vue from '@vitejs/plugin-vue';


export default defineConfig({
    plugins: [
        vue({
            template: {
                compilerOptions: {
                  isCustomElement: (tag) => {
                    return tag.startsWith('Formkit') // (return true)
                  }
                }
            }
        }), //ad vue to laravel as plugin
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});

//vite will watch your resources/js/app.js file and resources/css/app.css file: npm run dev