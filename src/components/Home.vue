<template>
  <v-container>
    <v-row class="text-left">
      <v-col cols="12">
        <v-img
          :src="require('../assets/skyline.png')"
          aspect-ratio="4.3"
          contain
          
        >
          <div class="quoteBoxContainer quoteBox text-subtitle-1 d-none d-sm-block">
              “In der Fremde erfährt man, was die Heimat wert ist” <br>
              <span class="text-caption">Ernst Wiechert</span>
          </div>
        </v-img>
      </v-col>
      <v-col cols="12" class="d-flex d-sm-none">
        <div class="text-subtitle-1 quoteBox">
          “In der Fremde erfährt man, was die Heimat wert ist” <br>
          <span class="text-caption">Ernst Wiechert</span>
        </div>
      </v-col>
      <v-col cols="12" xl="8" offset-xl="2">
        <h1 class="text-h5 text-md-h4 mb-3">
          Liebe Freunde des Erfurter Nordens – Herzlich willkommen!
        </h1>

        <p class="subheading font-weight-regular">
          Unser Verein „RedMountain@Rieth e.V.“ leistet einen 
          Beitrag zur Gestaltung des Erfurter Nordens als lebens- 
          und liebenswerten Place to be.
        </p>
        <p>
          <a href="#about">
            Neugierig?
          </a>
        </p>
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
  export default {
    name: 'Home',

    data: () => ({
    }),
  }
</script>

<style>
</style>
