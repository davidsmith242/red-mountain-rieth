<template>
  <v-container>
    <v-row class="pb-16">
      <HeaderImage />
      <v-col cols="12" sm="6" class="text-left">
        <h2 class="text-xs-h6 text-md-h4 ">
          Über unseren Verein
        </h2>

        <p class="font-weight-regular">
          Wir sind 11 Freunde. Born and raised im Erfurter Norden. 
          Die Stadtteile Roter Berg, Rieth, Moskauer Platz und Berliner Platz 
          sind die Spielplätze unserer Kindheit, hier haben wir uns gefunden 
          und sind gemeinsam erwachsen geworden. Bolzen hinterm 11er, 
          Schwimmen im Rieth, erste Konzerte im KuFZ, Knutschen im 
          Innenhof – all die Erinnerungen unserer Jugend, die wir zwischen 
          den Wohnscheiben und Punkthochhäusern gesammelt haben, bedeuten 
          für uns Heimat, die wir auf keinen Fall eintauschen würden. 
        </p>
        <p>
          <a href="#about/1">
            Wie wir helfen
          </a>
        </p>
      </v-col>
      <v-col cols="12" sm="6">
        <!-- <v-img
          :src="require('../assets/takethat.jpg')"
          contain
          max-width="600"
        > -->
        <v-img
          src="http://via.placeholder.com/600x320"
          contain
          max-width="600"
        >
        </v-img>
      </v-col>

      <!-- <v-col
        class="mb-5"
        cols="12"
      >
        <h2 class="headline font-weight-bold mb-3">
          What's next?
        </h2>

        <v-row justify="center">
          <a
            v-for="(next, i) in whatsNext"
            :key="i"
            :href="next.href"
            class="subheading mx-3"
            target="_blank"
          >
            {{ next.text }}
          </a>
        </v-row>
      </v-col> -->
    </v-row>
  </v-container>
</template>

<script>
  import HeaderImage from "../core/HeaderImage"
  export default {
    name: 'About',
    components: {
      HeaderImage,
    },

    data: () => ({
    }),
  }
</script>

<style>
  
</style>
