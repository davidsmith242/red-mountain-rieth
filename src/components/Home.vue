<template>
  <v-container>
    <v-row class="text-left">
      <v-col cols="12">
        <v-img
          :src="require('../assets/skyline.png')"
          max-height="450"
          max-width="1000"
          contain
        >
          <div class="quote text-subtitle-1">
              “In der Fremde erfährt man, was die Heimat wert ist” <br>
              <span class="text-caption">Ernst Wiechert</span>
          </div>
        </v-img>
      </v-col>

      <v-col>
        <h1 class="display-1 mb-3">
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
  .quote {
    /* background-color: #d3d3d3; */
    background: rgba(221, 221, 221, 0.8);
    /* color: white; */
    /* font-weight: bold; */
    margin-right: 0;
    position:absolute;
    padding: 10px;
    bottom:0;
    right:0;
  }
</style>
