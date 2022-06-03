<template>
  <v-card
    class="mx-auto mt-2 mb-16"
    max-width="800">
    <v-card-title class="text-h5 grey lighten-2">
      Kontakt
    </v-card-title>
    <v-card-text>
      <kontakt-daten />
      
      <h2 class="text-h6 text-md-h5 mb-3">
        Ihre Nachricht an uns
      </h2>
      <kontakt-formular />
    </v-card-text>
  </v-card>
</template>

<script>
  export default {
    name: 'KontaktDialog',
    components: {
      KontaktDaten: () => import('@/core/KontaktDaten'),
      KontaktFormular: () => import('@/core/KontaktForm'),
    },
    data: () => {
      return {}
    },
  }
</script>

<style>
  
</style>
