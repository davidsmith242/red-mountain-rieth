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
      <v-toolbar-title>Title</v-toolbar-title>
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
    mapGetters,
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
      actSection: 'page1',
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
      console.log("After load: " + destination.anchor);
      this.actSection = destination.anchor;
      this.setActSection(destination.anchor);
    },
  },
};
</script>

<style>
</style>
