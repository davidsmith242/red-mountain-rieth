<template>
  <full-page
  
    ref="fullpage"
    :options="options"
    id="fullpage"
    :skip-init="true"
  >
    <div class="section">
      <Home />
    </div>
    <div class="section fp-auto-height-responsive">
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
        <SofioterStrasse />
      </div>
    </div>
    <div class="section">
      <Spenden />
    </div>
  </full-page>
</template>

<script>
// import HelloWorld from "./components/HelloWorld";

import Home from "./components/Home"
import About from "./components/About"
import Helfen from "./components/Helfen"
import Transparenz from "./components/Transparenz"
import Projektarbeit from "@/components/Projektarbeit"
import Spenden from "@/components/Spenden"
import SofioterStrasse from "@/projekte/SofioterStrasse";

import {
  mapGetters,
  mapMutations
} from 'vuex'


export default {
  name: "App",

  components: {
    Home,
    About,
    Helfen,
    Transparenz,
    Projektarbeit,
    Spenden,
    SofioterStrasse
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
        scrollOverflow: false,
        scrollBar: false,
        controlArrows: true,
        loopHorizontal: false,
        menu: "#menu",
        navigation: true,
        slidesNavigation: true,
        slidesNavPosition: 'top',
        normalScrollElements: '.dialogs',
        // paddingBottom: '140px',
        // paddingTop: '30px',
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
