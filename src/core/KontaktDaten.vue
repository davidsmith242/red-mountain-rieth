<template>
  <v-list two-line>
    <v-list-item>
      <v-list-item-icon>
        <v-icon color="indigo">
          mdi-phone-classic
        </v-icon>
      </v-list-item-icon>

      <v-list-item-content>
        <v-list-item-title>+49 162 7800977</v-list-item-title>
        <v-list-item-subtitle>Mobil</v-list-item-subtitle>
      </v-list-item-content>
    </v-list-item>
    <!-- <v-list-item>
      <v-list-item-action></v-list-item-action>
      <v-list-item-content>
        <v-list-item-title>036100000</v-list-item-title>
        <v-list-item-subtitle>Festnetz</v-list-item-subtitle>
      </v-list-item-content>
    </v-list-item> -->
    <v-divider inset></v-divider>
    <v-list-item>
      <v-list-item-icon>
        <v-icon color="indigo">
          mdi-email-box 
        </v-icon>
      </v-list-item-icon>

      <v-list-item-content>
        <v-list-item-title>
          <a href="mailto:info@rm-rieth-ev.de ">info@rm-rieth-ev.de </a>
        </v-list-item-title>
        <v-list-item-subtitle>e-Mail</v-list-item-subtitle>
      </v-list-item-content>
    </v-list-item>
    <v-divider inset></v-divider>
    <v-list-item>
      <v-list-item-icon>
        <v-icon color="indigo">
          mdi-map-marker
        </v-icon>
      </v-list-item-icon>

      <v-list-item-content>
        <v-list-item-title>Charlottenstrasse 1</v-list-item-title>
        <v-list-item-subtitle>99096 Erfurt</v-list-item-subtitle>
      </v-list-item-content>
    </v-list-item>
  </v-list>
</template>

<script>

export default {
  name: "KontaktDaten",
  data() {
    return {};
  },
};
</script>

<style>
</style>