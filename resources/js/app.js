import { createApp } from 'vue'
import App from './VueApp/App.vue'
import router from './VueApp/router'

/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'
/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
/* import specific icons */
import { faTwitter, faFacebook, faLinkedin, faXing } from '@fortawesome/free-brands-svg-icons'

/* add icons to the library */
library.add(faTwitter, faFacebook, faLinkedin, faXing )


//form validation
import name from './VueApp/custom-form-rules/name'

import './VueApp/assets/main.css'

// FormKit imports
import { plugin as formKitPlugin, defaultConfig } from '@formkit/vue'
import { createMultiStepPlugin } from '@formkit/addons'
import '@formkit/themes/genesis'
import '@formkit/addons/css/multistep'

const app = createApp(App).component('font-awesome-icon', FontAwesomeIcon)


app.use(router)
app.use(formKitPlugin, defaultConfig({
    plugins: [createMultiStepPlugin()],
    rules: { name }
}))
,
app.mount('#app')
