import { createApp } from 'vue'
import App from './VueApp/App.vue'
import router from './VueApp/router'
import VueFormulate from '@braid/vue-formulate'



/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'
/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
/* import specific icons */
import { faTwitter, faFacebook, faLinkedin, faXing} from '@fortawesome/free-brands-svg-icons'
import { faX, faBars, faXmark } from '@fortawesome/free-solid-svg-icons'


/* add icons to the library */
library.add(faTwitter, faFacebook, faLinkedin, faXing, faX, faBars, faXmark )


//form validation
import file from './VueApp/custom-form-rules/file'

import './VueApp/assets/main.css'

// FormKit imports
import { plugin as formKitPlugin, defaultConfig } from '@formkit/vue'
import { createMultiStepPlugin } from '@formkit/addons'
import '@formkit/themes/genesis'
import '@formkit/addons/css/multistep'

const app = createApp(App).component('font-awesome-icon', FontAwesomeIcon)

// app.use(VueFormulate)
app.use(router)
app.use(formKitPlugin, defaultConfig({
    plugins: [createMultiStepPlugin()],
    rules: { file }
}))
,
app.mount('#app')
