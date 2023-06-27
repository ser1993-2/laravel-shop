import '../bootstrap';

import {createApp} from 'vue'
import App from './App.vue'
import router from './router'
import vuex from 'vuex'
import axios from 'vue-axios'

createApp(App)
    .use(router,vuex,axios)
    .mount("#app")
