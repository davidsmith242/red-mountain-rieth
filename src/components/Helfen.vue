<template>
  <v-container>
    <v-row class="pb-16">
      <HeaderImage />
      <v-col cols="12" class="text-left">
        <h2 class="text-xs-h6 text-md-h4 ">
          Wie wir helfen
        </h2>

        <p class="font-weight-regular">
          Für uns ist jetzt Zeit, etwas zurückzugeben! Wir wollen dazu beitragen, 
          dass auch zukünftige Generationen den Erfurter Norden als lebens- und 
          liebenswerte Umgebung erfahren. Dafür wählen wir geeignete Projekte aus, 
          für die wir Spenden sammeln und die wir gegebenenfalls auch organisatorisch 
          unterstützen. Dabei können wir auf ein großes Netzwerk an Freunden, 
          Partnern und bestehenden Strukturen bauen. Es ist uns wichtig, so 
          transparent wie möglich mit uns anvertrauten Spenden umzugehen und 
          jederzeit nachvollziehbar zu machen, wer für was warum wieviel Unterstützung erhält. 
        </p>
      </v-col>
      <!-- <v-col cols="12" sm="6">
        <v-img
          :src="require('../assets/takethat.jpg')"
          contain
          max-width="600"
        >
        </v-img>
      </v-col> -->
    </v-row>
  </v-container>
</template>

<script>
  import HeaderImage from "../core/HeaderImage"
  export default {
    name: 'Helfen',
    components: {
      HeaderImage,
    },

    data: () => ({
    }),
  }
</script>

<style>
  
</style>
