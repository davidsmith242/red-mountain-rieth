<template>
    <v-dialog
      v-model="dialog"
      width="500"
    >
      <template v-slot:activator="{ on, attrs }">
        <v-btn
          v-bind="attrs"
          v-on="on"
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
          <v-list two-line>
            <v-list-item>
              <v-list-item-icon>
                <v-icon color="indigo">
                  mdi-phone-classic
                </v-icon>
              </v-list-item-icon>

              <v-list-item-content>
                <v-list-item-title>0170000000</v-list-item-title>
                <v-list-item-subtitle>Mobil</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
            <v-list-item>
              <v-list-item-action></v-list-item-action>
              <v-list-item-content>
                <v-list-item-title>036100000</v-list-item-title>
                <v-list-item-subtitle>Festnetz</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
            <v-divider inset></v-divider>
            <v-list-item>
              <v-list-item-icon>
                <v-icon color="indigo">
                  mdi-map-marker
                </v-icon>
              </v-list-item-icon>

              <v-list-item-content>
                <v-list-item-title>1400 Main Street</v-list-item-title>
                <v-list-item-subtitle>99000 Erfurt</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </v-list>
          
        <h2 class="text-h6 text-md-h5 mb-3">
          Kontaktformular
        </h2>


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
    data: () => {
      return {
        dialog: false,
      }
    },
  }
</script>

<style>
  
</style>
