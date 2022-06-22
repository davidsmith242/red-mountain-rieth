<template>
    <v-dialog
      v-model="dialog"
      width="80%"
      scrollable
    >
      <template v-slot:activator="{ on, attrs }">
        <v-btn
          v-bind="attrs"
          v-on="on"
          :text="text"
        >
          <span>Datenschutz</span>
          <v-icon>mdi-database</v-icon>
        </v-btn>
      </template>

      <v-card>
        <v-card-text>
          <Datenschutz />
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
    name: 'DatenschutzDialog',
    props: ['text'],
    components: {
      Datenschutz: () => import('@/components/Datenschutz'),
    //   KontaktFormular: () => import('@/core/KontaktForm'),
    },
    data: () => {
      return {
        dialog: false,
        contentList: [
          'Präambel',
          'Verantwortlicher',
          'Ansprechpartner für Datenschutz',
          'Kontaktaufnahme',
          'Externes Hosting',
          'Google Fonts',
          'Änderung der Datenschutzerklärung',
        ]
      }
    },
  }
</script>

<style>
  
</style>
