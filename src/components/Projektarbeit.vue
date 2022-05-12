<template>
  <v-container>
    <v-row class="pb-16">
      <HeaderImage />
      <v-col cols="12" class="text-left">
        <h2 class="text-xs-h6 text-md-h4 ">
          Unsere Projektarbeit
        </h2>

        <p class="font-weight-regular">
          Unterstütze mit deiner Spende unser aktuelles Projekt im Erfurter Norden.
          Dabei stehen in unseren Hilfsprojekten die Bedürfnisse der Stadtteile Rieth, 
          Moskauer Platz, Berliner Platz, Roter Berg und ihrer Bewohner im Mittelpunkt 
          unserer Arbeit, mit dem Schwerpunkt einer finanziellen Unterstützung. 
          Zielgerichtet unterstützen wir jährlich ein Projekt und stellen so sicher das 
          die eingenommenen Spenden dort ankommen wo sie benötigt werden. Jeder von euch 
          gespendete Euro wird ohne Abzug ausnahmslos im aktuellen Projekt eingesetzt!
        </p>
        <p>
          <a href="#projects/1">
            Du willst mehr über unser aktuelles Projekt erfahren? 
          </a>
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
    name: 'Projektarbeit',
    components: {
      HeaderImage,
    },

    data: () => ({
    }),
  }
</script>

<style>
  
</style>
