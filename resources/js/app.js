import './bootstrap';

//create vue application
import { createApp } from 'vue'
//Structure that contains Application
import router from './VueApp/router'

import App from './VueApp/App.vue'

const app = createApp(App)

app.use(router)

app.mount('#app')
