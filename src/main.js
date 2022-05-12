import Vue from 'vue'
import App from './App.vue'
import VueLazyload from 'vue-lazyload'
import store from './store'

// Optional. When using scrollOverflow:true
import 'fullpage.js/vendors/scrolloverflow'
import 'fullpage.js/dist/fullpage.min.css'
import './main.css'

// import './fullpage.scrollHorizontally.min' // Optional. When using fullpage extensions

// Optional. When using fullpage extensions
//import './fullpage.scrollHorizontally.min'
import VueFullPage from 'vue-fullpage.js'

import vuetify from './plugins/vuetify'

import { library } from '@fortawesome/fontawesome-svg-core'
/* import specific icons */
import { faUserSecret } from '@fortawesome/free-solid-svg-icons'
import { faPaypal } from '@fortawesome/free-brands-svg-icons'
/* add icons to the library */
library.add(faUserSecret, faPaypal)

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

Vue.config.productionTip = false

/* add font awesome icon component */
Vue.component('font-awesome-icon', FontAwesomeIcon)

Vue.use(VueFullPage)
Vue.use(VueLazyload, {})
new Vue({
  vuetify,
  store,
  render: h => h(App)
}).$mount('#app')
