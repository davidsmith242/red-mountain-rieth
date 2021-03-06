import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    drawer: false,
    actSection: 'home',
    navitems: [
      {
        text: 'Home',
        anchor: 'home'
      },
      {
        text: 'Der Verein',
        anchor: 'about'
      },
      {
        text: 'Projektarbeit',
        anchor: 'projects'
      },
      {
        text: 'Jetzt Spenden',
        anchor: 'donates'
      },
    ]
  },
  getters: {
    navlinks: (state) =>{
      return state.navitems
    }
  },
  mutations: {
    setDrawer: (state, payload) => (state.drawer = payload),
    setActSection: (state, payload) => (state.actSection = payload),
    toggleDrawer: state => (state.drawer = !state.drawer)
  },
  actions: {

  }
})
