import { createApp } from 'vue';

const app = createApp({});

import App from './src/MainLayout.vue';
app.component('app', App);

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

app.mount('#app');
