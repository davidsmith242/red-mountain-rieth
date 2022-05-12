<template>
  <v-container>
    <v-row class="pb-16">
      <HeaderImage />
      <v-col cols="12" class="text-left">
        <h2 class="text-xs-h6 text-md-h4 ">
          Transparenz
        </h2>

        <p class="font-weight-regular">
          Transparent und effektiv: Bei uns werden 100% der Spenden für die 
          Projekte zur Verfügung gestellt. 
          Ein wichtiges Thema für uns ist die bestmögliche Transparenz unserer 
          Arbeit. Auch wollen wir an der Stelle über abgeschlossene Projekte 
          informieren und streben fortwährend die Überprüfung unserer Arbeit 
          durch Dritte an.
        </p>
        <v-row justify="start">
          <v-col md="3">
            <satzung />
          </v-col>
          <v-col md="3">
            <projektberichte />
          </v-col>
        </v-row>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
  import HeaderImage from "../core/HeaderImage"

  export default {
    name: 'Transparenz',
    components: {
      HeaderImage,
      Satzung: () => import('@/dialogs/Satzung'),
      Projektberichte: () => import('@/dialogs/Projektberichte')
    },
    data: () => ({
      open: false,
    }),
    methods: {
      openDialog() {
        this.open = true;
      }
    },
  }
</script>

<style>
  
</style>
