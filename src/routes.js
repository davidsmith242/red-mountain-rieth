import VueRouter from "vue-router";

import FullPage from "./FullPage";

// const Bar = { template: '<div>bar</div>' }
// const Test = { template: '<div>Test</div>' };
// const Test2 = { template: '<div>Test</div>' };

const Datenschutz = () =>
  import(
    /* webpackChunkName: "group-datenschutz" */ "./components/Datenschutz.vue"
  );
const Kontakt = () =>
  import(/* webpackChunkName: "group-kontakt" */ "./components/Kontakt.vue");

let routes = [
  {
    path: "/",
    component: FullPage,
    alias: ["/#home", "/#home", "/#about"],
    // component: require('./FullPage.vue')
  },
  {
    path: "/datenschutz",
    component: Datenschutz,
  },
  {
    path: "/kontakt",
    name: "Kontakt",
    component: Kontakt,
  },
//   {
//     path: "*",
//     component: FullPage,
//   },
];

export default new VueRouter({
  routes,
  mode: "history",
});
