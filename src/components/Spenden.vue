<template>
  <v-container>
    <v-row class="pb-16">
      <HeaderImage />
      <v-col cols="12" class="text-left">
        <h2 class="text-xs-h6 text-md-h4 ">
          Spenden
        </h2>

        <p class="font-weight-regular">
          Wir freuen uns, dass du unser laufendes Projekt unterstützen willst. Deine Spende fließt ohne 
          Abzug von Verwaltungs- und Werbekosten zu 100% ein. <br><br>
          Du leistest mit deinem Beitrag eine wichtige Hilfe im Erfurter Norden. Vielen Dank!

        </p>
        <SpendenInfo />
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
      SpendenInfo: () => import('@/dialogs/SpendenInfo'),
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
