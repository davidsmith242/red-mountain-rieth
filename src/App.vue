<template>
  <v-app>
    <v-app-bar app color="primary" dark>
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

    <v-main>
      <full-page
        ref="fullpage"
        :options="options"
        id="fullpage"
        :skip-init="true"
      >
        <div class="section">
          <!-- <Home /> -->
          Home
        </div>
        <div class="section">
          <!-- <Home /> -->
          Der Verein
        </div>
        <div class="section">
          <div class="slide">
            <h3>Aktion 1</h3>
            <p>test tedsndfmmn fdweufnwenfwfwjn fwjefnuwenf fweifjweij
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
    </v-main>
  </v-app>
</template>

<script>
// import HelloWorld from "./components/HelloWorld";

export default {
  name: "App",

  components: {
    // HelloWorld,
  },

  data() { 
    return {
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
    }
  },
  mounted() {
    // `this` points to the vm instance
    // console.log("count is: " + this.count); // => "count is: 1"
    this.componentsReady();
  },
  methods: {
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
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  /* text-align: center;
  color: #2c3e50;
  margin-top: 60px; */
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  text-decoration: none;
}
/* Custom
 * --------------------------------------- */
body {
  font-family: arial, helvetica;
}
.section {
  position: relative;
  text-align: center;
}
#section-1 h2 {
  color: #fff;
  font-size: 10em;
  font-weight: 900;
}
#section-1 h1 {
  font-size: 2em;
  font-weight: 100;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  margin: 1.5em auto 1em auto;
  color: #35495e;
  padding-right: 30px;
  padding-left: 30px;
}
#section-1 li {
  display: inline-block;
  margin: 1.25em 0.3em;
}
.section-1-button {
  padding: 0.93em 1.87em;
  background: #35495e;
  border-radius: 5px;
  display: block;
  color: #fff;
}
h3 {
  font-size: 5em;
  text-align: center;
  color: #fff;
  font-weight: bold;
}
#logo {
  position: fixed;
  top: 20px;
  left: 20px;
  color: #fff;
  font-weight: bold;
  z-index: 99;
  font-size: 1.9em;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
}

/* Menu
 * --------------------------------------- */
#menu-line {
  position: absolute;
  bottom: -4px;
  left: 0;
  width: 159px;
  height: 2px;
  background: #fff;
}

#menu {
  position: fixed;
  top: 10px;
  right: 20px;
  z-index: 70;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  letter-spacing: 1px;
  font-size: 1.1em;
}
#menu li {
  display: inline-block;
  margin: 10px 0px;
  position: relative;
}
#menu a {
  color: #fff;
  padding: 0 1.1em 1.1em 1.1em;
}
#menu li.active a:after {
  content: "";
  margin: 0 1.1em 0 1.1em;
  height: 2px;
  background: #fff;
  display: block;
  position: absolute;
  bottom: -6px;
  left: 0;
  right: 0;
  display: block;
}

/* Actions buttons
 * --------------------------------------- */
.actions {
  position: fixed;
  bottom: 2%;
  margin: 0 auto;
  z-index: 99;
  left: 0;
  right: 0;
  text-align: center;
}
.actions li {
  display: inline-block;
  margin: 0.3em 0.3em;
}
.actions-button {
  padding: 0.73em 1.47em;
  background: rgba(53, 73, 94, 0.47);
  border-radius: 5px;
  display: block;
  color: #fff;
  cursor: pointer;
}

/* Twitter
 * --------------------------------------- */
.twitter-share i {
  vertical-align: middle;
  position: relative;
  top: 2px;
  display: inline-block;
  width: 38px;
  height: 14px;
  color: white;
  top: -4px;
  left: -2px;
  fill: #fff;
}
.twitter-share svg {
  height: 40px;
  margin-top: -10px;
}
.view-github {
  position: fixed;
  top: 20px;
  left: 20px;
  z-index: 999;
  padding: 0.93em 1.87em;
  background: #35495e;
  border-radius: 5px;
  display: block;
  color: #fff;
}

.fp-controlArrow {
  position: absolute;
  z-index: 4;
  top: 44%;
  cursor: pointer;
  width: 0;
  height: 0;
  margin-top: -26px !important;
  -webkit-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  filter: drop-shadow(4px 3px 1px rgba(33, 33, 33, 0.36));
}

.fp-controlArrow.fp-next {
  width: 0 !important;
  height: 0 !important;
  right: 40px !important;
  border-width: 25px 0 25px 22px !important;
  border-color: transparent transparent transparent #e3e3e3 !important;
  border-style: solid;
}

.fp-controlArrow.fp-prev {
  width: 0 !important;
  height: 0 !important;
  left: 40px !important;
  border-width: 25px 22px 25px 0 !important;
  border-color: transparent #e3e3e3 transparent transparent !important;
  border-style: solid;
}
</style>
