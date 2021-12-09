import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    drawer: false,
    actSection: 'page1',
    navitems: [
      {
        text: 'Home',
        anchor: 'page1'
      },
      {
        text: 'Der Verein',
        anchor: 'page2'
      },
      {
        text: 'Aktionen',
        anchor: 'page3'
      },
      {
        text: 'Satzung',
        anchor: 'page4'
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
