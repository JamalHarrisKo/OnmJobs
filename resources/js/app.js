// import './bootstrap';

// //create vue application
// import { createApp } from 'vue'
// //Structure that contains Application
// import router from './VueApp/router'

// import App from './VueApp/App.vue'

// const app = createApp(App)

// app.use(router)

// app.mount('#app')






import { createApp } from 'vue'
import App from './VueApp/App.vue'
import router from './VueApp/router'

import './VueApp/assets/main.css'

// FormKit imports
import { plugin as formKitPlugin, defaultConfig } from '@formkit/vue'
import { createMultiStepPlugin } from '@formkit/addons'
import '@formkit/themes/genesis'
import '@formkit/addons/css/multistep'

const app = createApp(App)

app.use(router)
app.use(formKitPlugin, defaultConfig({
    plugins: [createMultiStepPlugin()]
}))

app.mount('#app')
