<template>
  <v-app>
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
          <v-btn class="ma-1" small plain :href="`#${item.anchor}`" v-bind:class="{ active: actSection === item.anchor }">{{item.text}}</v-btn>
        </li>
      </ul>
    </v-app-bar>
    <Navigation v-bind:drawer="drawer" />

    <v-main>
      <full-page
      
        ref="fullpage"
        :options="options"
        id="fullpage"
        :skip-init="true"
      >
        <div class="section">
          <Home />
        </div>
        <div class="section">
          <div class="slide">
            <About />
          </div>
          <div class="slide">
            <Helfen />
          </div>
          <div class="slide">
            <Transparenz />
          </div>
        </div>
        <div class="section">
          <div class="slide">
            <Projektarbeit />
          </div>
          <div class="slide">
            <h2>Aktuelles Projekt 22/23</h2>
            <p class="font-weight-regular">Tagesgruppe Sofioter Straße</p>
            <Projektbericht1 />
          </div>
        </div>
        <div class="section">
          <Spenden />
        </div>
      </full-page>
      <v-bottom-navigation 
        v-model="value"
        background-color="blue"
        fixed
        >
        <v-btn value="recent">
          <span>Recent</span>

          <v-icon>mdi-history</v-icon>
        </v-btn>

        <v-btn value="favorites">
          <span>Favorites</span>

          <v-icon>mdi-heart</v-icon>
        </v-btn>

        <v-btn value="nearby">
          <span>Nearby</span>

          <v-icon>mdi-map-marker</v-icon>
        </v-btn>
      </v-bottom-navigation>
    </v-main>
  </v-app>
</template>

<script>
// import HelloWorld from "./components/HelloWorld";

import Navigation from "./core/Navigation"
import Home from "./components/Home"
import About from "./components/About"
import Helfen from "./components/Helfen"
import Transparenz from "./components/Transparenz"
import Projektarbeit from "@/components/Projektarbeit"
import Spenden from "@/components/Spenden"

import Projektbericht1 from "@/dialogs/Projektbericht1"

import {
  mapGetters,
  mapMutations
} from 'vuex'



export default {
  name: "App",

  components: {
    Navigation,
    Home,
    About,
    Helfen,
    Transparenz,
    Projektarbeit,
    Spenden,
    Projektbericht1,
  },

  data() {
    return {
      actSection: 'home',
      isReady: false,
      value: 'recent',
      drawer: false,
      group: null,
      options: {
        licenseKey: "YOUR_KEY_HERE",
        afterLoad: this.afterLoad,
        scrollOverflow: true,
        scrollBar: false,
        controlArrows: true,
        menu: "#menu",
        navigation: true,
        anchors: ["home", "about", "projects", "donates"],
        sectionsColor: [
          "#efefef",
          "#efefef",
          "#efefef",
          "#efefef",
          // "#0798ec",
          // "#fec401",
          "#1bcee6",
          "#ee1a59",
          "#2c3e4f",
          "#ba5be9",
          "#b4b8ab",
        ],
      },
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
    this.componentsReady();
  },
  methods: {
    ...mapMutations(['toggleDrawer','setActSection']),
    componentsReady() {
      this.$refs.fullpage.init();
      this.isReady = true
    },
    afterLoad(origin, destination) {
      // console.log("After load: " + destination.anchor);
      this.actSection = destination.anchor;
      this.setActSection(destination.anchor);
    },
  },
};
</script>

<style>
</style>
