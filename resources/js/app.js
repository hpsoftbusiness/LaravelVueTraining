
require('./bootstrap');

import { createApp } from 'vue';
import PostSearch from './components/PostSearch.vue';
import PostIndex from './components/PostIndex.vue';
import PostEdit from './components/PostEdit.vue';

createApp({
    components: {
        PostSearch,
        PostIndex,
        PostEdit
    }
}).mount('#app');
