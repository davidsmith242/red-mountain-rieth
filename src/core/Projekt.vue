<template>
  <v-container>
    <v-row class="pb-2">
      <!-- <HeaderImage /> -->
      <v-col cols="12" class="text-left font-weight-regular">
        <h3 class="text-h5">{{titel}}</h3>
        <p class="">
          <slot></slot> 
        </p>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
  // import HeaderImage from "./HeaderImage"
  export default {
    name: 'Projekt',
    props: ['titel'],
    components: {
      // HeaderImage,
    },

    data: () => ({
    }),
  }
</script>

<style>
  
</style>
