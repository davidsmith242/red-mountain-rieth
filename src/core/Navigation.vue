<template>
  <v-navigation-drawer v-model="drawer" dark
    color="light-blue accent-4"
   absolute left temporary >
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
        <v-list-item data-menuanchor="page1" href="#page1">
          <v-list-item-title>Home</v-list-item-title>
        </v-list-item>

        <v-list-item data-menuanchor="page2" href="#page2">
          <v-list-item-title>Der Verein</v-list-item-title>
        </v-list-item>

        <v-list-item data-menuanchor="page3" href="#page3">
          <v-list-item-title>Aktionen</v-list-item-title>
        </v-list-item>

        <v-list-item data-menuanchor="page4" href="#page4">
          <v-list-item-title>Satzung</v-list-item-title>
        </v-list-item>
      </v-list-item-group>
    </v-list>
  </v-navigation-drawer>
</template>

<script>
import {
  // mapGetters,
  mapMutations,
} from "vuex";

export default {
  name: "Navigation",
  data() {
    return {
      group: null,
    };
  },
  computed: {
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
    onClick(e, item) {
      e.stopPropagation();

      if (item.to === "/") {
        this.$vuetify.goTo(0);
        this.setDrawer(false);
        return;
      }

      if (item.to || !item.href) return;

      this.$vuetify.goTo(item.href);
      this.setDrawer(false);
    },
  },
};
</script>

<style>
</style>