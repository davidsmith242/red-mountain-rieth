<template>
  <v-app id="app">
    <v-main>
      <v-app-bar app color="primary" dark>
        <v-app-bar-nav-icon @click.stop="toggleDrawer()" class="d-flex d-sm-none"></v-app-bar-nav-icon>
        <div class="d-flex align-center mr-3">
          <v-img
            alt="Vuetify Logo"
            class="shrink mr-2"
            contain
            src="https://cdn.vuetifyjs.com/images/logos/vuetify-logo-dark.png"
            transition="scale-transition"
            width="40"
          />
        </div>
        <v-toolbar-title>RM@R</v-toolbar-title>
        <v-spacer></v-spacer>
        <ul id="menu" class="d-none d-sm-flex">
          <li v-for="item in navlinks" :key="item.anchor" :data-menuanchor="item.anchor" >
            <v-btn class="ma-1" small plain :href="`#${item.anchor}`" @click="onClick(item.anchor)" v-bind:class="{ active: actSection === item.anchor }">{{item.text}}</v-btn>
            <!-- <v-btn class="ma-1" small plain @click="onClick(item.anchor)" v-bind:class="{ active: actSection === item.anchor }">{{item.text}}</v-btn> -->
          </li>
        </ul>
      </v-app-bar>
      <Navigation v-bind:drawer="drawer" />
      <!-- <v-container> -->
        <router-view></router-view>
      <!-- </v-container> -->
      <!-- <FullPage /> -->

      <v-bottom-navigation 
        v-model="value"
        background-color="blue"
        fixed
        >
        <!-- <Kontakt /> -->
        <v-btn to="/kontakt" value="kontakt">
          <span>Kontakt</span>
          <v-icon>mdi-card-account-phone-outline</v-icon>
        </v-btn>

        <v-btn value="favorites">
          <span>Impressum</span>

          <v-icon>mdi-heart</v-icon>
        </v-btn>

        <!-- <Datenschutz /> -->
        <v-btn to="/datenschutz" value="datenschutz">
          <span>Datenschutz</span>
          <v-icon>mdi-database</v-icon>
        </v-btn>
      </v-bottom-navigation>
    </v-main>
  </v-app>
</template>

<script>
// import HelloWorld from "./components/HelloWorld";

import Navigation from "./core/Navigation"
// import Home from "./components/Home"
// import About from "./components/About"
// import Helfen from "./components/Helfen"
// import Transparenz from "./components/Transparenz"
// import Projektarbeit from "@/components/Projektarbeit"
// import Spenden from "@/components/Spenden"
// import FullPage from "@/FullPage"

// import Projektbericht1 from "@/dialogs/Projektbericht1"
// import Kontakt from "@/dialogs/Kontakt"
// import Datenschutz from "@/dialogs/Datenschutz"
import router from './routes.js'

import {
  mapGetters,
  mapMutations
} from 'vuex'


export default {
  name: "App",

  components: {
    Navigation,
    // Home,
    // About,
    // Helfen,
    // Transparenz,
    // Projektarbeit,
    // Spenden,
    // Projektbericht1,
    // Kontakt,
    // Datenschutz,
    // FullPage,
},

  data() {
    return {
      actSection: 'home',
      isReady: false,
      value: 'recent',
      drawer: false,
      group: null,
    };
  },
  computed: {
    // mix the getters into computed with object spread operator
    ...mapGetters([
       'navlinks',
    ]),
  },
  watch: {
    group () {
      this.drawer = false
    },
  },
  mounted() {
    // `this` points to the vm instance
    // console.log("count is: " + this.count); // => "count is: 1"
    // this.componentsReady();
  },
  methods: {
    ...mapMutations(['toggleDrawer','setActSection']),
    onClick(route) {
      // router.replace({ path: '/#' + route });
      // // var element = this.$refs[route];
      // var element = this.$attrs['data-anchor=' + route]
      // if (!element) {
      //   return;
      // }
      // var top = element.offsetTop;

      // window.scrollTo(0, top);
      // console.log('router', router.currentRoute);
      // console.log('route', route);

      if (router.currentRoute.path && router.currentRoute.path !== '/') {
        console.log('replace', router.currentRoute.path);
        router.replace({ path: '/#' + route });
        
      }
    },
    // componentsReady() {
    //   this.$refs.fullpage.init();
    //   this.isReady = true
    // },
    // afterLoad(origin, destination) {
    //   // console.log("After load: " + destination.anchor);
    //   this.actSection = destination.anchor;
    //   this.setActSection(destination.anchor);
    // },
  },
};
</script>

<style>
</style>
