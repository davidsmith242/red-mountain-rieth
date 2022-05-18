<template>
    <v-dialog
      v-model="dialog"
      width="500"
    >
      <template v-slot:activator="{ on, attrs }">
        <v-btn
          v-bind="attrs"
          v-on="on"
          :text="text"
        >
          <span>Kontakt</span>
          <v-icon>mdi-card-account-phone-outline</v-icon>
        </v-btn>
      </template>

      <v-card>
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

        <v-divider></v-divider>

        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn
            color="primary"
            text
            @click="dialog = false"
          >
            Schließen
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
</template>

<script>
  export default {
    name: 'Kontakt',
    props: ['text'],
    components: {
      KontaktDaten: () => import('@/core/KontaktDaten'),
      KontaktFormular: () => import('@/core/KontaktForm'),
    },
    data: () => {
      return {
        dialog: false,
      }
    },
  }
</script>

<style>
  
</style>
