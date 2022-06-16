<template>
  <v-navigation-drawer
    v-model="drawer"
    dark
    color="light-blue accent-4"
    absolute
    left
    temporary
  >
    <v-list-item>
      <v-list-item-content>
        <v-list-item-title class="text-h6"> Navigation </v-list-item-title>
        <!-- <v-list-item-subtitle> subtext </v-list-item-subtitle> -->
      </v-list-item-content>
    </v-list-item>

    <v-divider></v-divider>
    <v-list nav dense>
      <v-list-item-group
        v-model="group"
        active-class="deep-purple--text text--accent-4"
      >
        <v-list-item
          v-for="item in navlinks"
          :key="item.anchor"
          :data-menuanchor="item.anchor"
          :href="`#${item.anchor}`"
          @click="onClick(item.anchor)"
          active-class="highlighted"
          :class="actSection === item.anchor ? 'highlighted' : ''"
        >
          <v-list-item-title>{{ item.text }}</v-list-item-title>
        </v-list-item>
      </v-list-item-group>
    </v-list>
  </v-navigation-drawer>
</template>

<script>
import { mapGetters, mapMutations } from "vuex";
import router from '../routes.js'

export default {
  name: "Navigation",
  data() {
    return {
      group: null,
    };
  },
  computed: {
    ...mapGetters(["navlinks"]),
    actSection: function () {
      return this.$store.state.actSection;
    },
    drawer: {
      get() {
        return this.$store.state.drawer;
      },
      set(val) {
        this.setDrawer(val);
      },
    },
  },
  methods: {
    ...mapMutations(["setDrawer"]),
      onClick(route) {
      if (router.currentRoute.path && router.currentRoute.path !== '/') {
        console.log('replace', router.currentRoute.path);
        router.replace({ path: '/#' + route });
        
      }
    },
    // onClick(e, item) {
    //   e.stopPropagation();
    //   alert('test');

    //   if (item.to === "/") {
    //     this.$vuetify.goTo(0);
    //     this.setDrawer(false);
    //     return;
    //   }

    //   if (item.to || !item.href) return;

    //   this.$vuetify.goTo(item.href);
    //   this.setDrawer(false);
    // },
  },
};
</script>

<style>
</style>