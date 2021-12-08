import Vue from 'vue'
import App from './App.vue'
import VueLazyload from 'vue-lazyload'

// Optional. When using scrollOverflow:true
import 'fullpage.js/vendors/scrolloverflow'
import 'fullpage.js/dist/fullpage.min.css'

// import './fullpage.scrollHorizontally.min' // Optional. When using fullpage extensions

// Optional. When using fullpage extensions
//import './fullpage.scrollHorizontally.min'
import VueFullPage from 'vue-fullpage.js'

import vuetify from './plugins/vuetify'

Vue.config.productionTip = false

Vue.use(VueFullPage)
Vue.use(VueLazyload, {})
new Vue({
  vuetify,
  render: h => h(App)
}).$mount('#app')
