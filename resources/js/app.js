
require('./bootstrap');

import { createApp } from 'vue';
import PostSearch from './components/PostSearch.vue';

createApp({
    components: {
        PostSearch,
    }
}).mount('#app');
