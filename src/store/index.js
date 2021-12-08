import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    drawer: false,
    navitems: [
      {
        text: 'Buchreihe',
        to: '/'
      },
      {
        text: 'Konzept',
        to: '/konzept'
      },
    ]
  },
  getters: {
    buchlinks: (state) => {
      return state.buchlinks
    },
    navlinks: (state) =>{
      return state.navitems
    }
  },
  mutations: {
    setDrawer: (state, payload) => (state.drawer = payload),
    toggleDrawer: state => (state.drawer = !state.drawer)
  },
  actions: {

  }
})
