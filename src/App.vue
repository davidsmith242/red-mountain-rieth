<template>
  <v-app>
    <v-app-bar app color="primary" dark>
      <v-app-bar-nav-icon @click.stop="toggleDrawer()"></v-app-bar-nav-icon>
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
      <v-toolbar-title>Title</v-toolbar-title>
      <v-spacer></v-spacer>
      <ul id="menu">
        <li data-menuanchor="page1" class="active">
          <a href="#page1">Home</a>
        </li>
        <li data-menuanchor="page2"><a href="#page2">Der Verein</a></li>
        <li data-menuanchor="page3"><a href="#page3">Aktionen</a></li>
        <li data-menuanchor="page4"><a href="#page4">Satzung</a></li>
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
          <!-- <Home /> -->
          <v-container fluid>

          Home
          </v-container>
        </div>
        <div class="section">
          <!-- <Home /> -->
          Der Verein
        </div>
        <div class="section">
          <div class="slide">
            <h3>Aktion 1</h3>
            <p>
              test tedsndfmmn fdweufnwenfwfwjn fwjefnuwenf fweifjweij
              fwefwefwefwe
            </p>
            <p>dfmifmeimf efiefeijiejfief feifjeifjeif feifjiejf</p>
          </div>
          <div class="slide">
            <h3>Aktion 2</h3>
          </div>
          <div class="slide">
            <h3>Aktion 3</h3>
          </div>
        </div>
        <div class="section">
          <h3>Satzung</h3>
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
 import {
    // mapGetters
    mapMutations
  } from 'vuex'

export default {
  name: "App",

  components: {
    // HelloWorld,
    Navigation,
  },

  data() {
    return {
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
        anchors: ["page1", "page2", "page3", "page4"],
        sectionsColor: [
          "#41b883",
          "#ff5f45",
          "#0798ec",
          "#fec401",
          "#1bcee6",
          "#ee1a59",
          "#2c3e4f",
          "#ba5be9",
          "#b4b8ab",
        ],
      },
    };
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
    ...mapMutations(['toggleDrawer']),
    componentsReady() {
      this.$refs.fullpage.init();
    },
    afterLoad() {
      console.log("After load");
    },
    // toggleNavigation () {
    //   this.options.navigation = !this.options.navigation
    // },
    // toggleScrollbar () {
    //   console.log('Changing scrollbar...')
    //   this.options.scrollBar = !this.options.scrollBar
    // }
  },
};
</script>

<style>
</style>
