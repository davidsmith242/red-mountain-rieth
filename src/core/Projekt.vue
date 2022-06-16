<template>
  <v-container>
    <v-row class="pb-16">
      <!-- <HeaderImage /> -->
      <v-col cols="12" class="text-left">
        <h2 class="text-xs-h6 text-md-h4 ">
          {{titel}}
        </h2>

        <p class="font-weight-regular">
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
