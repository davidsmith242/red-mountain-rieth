<template>
  <div>
    <v-dialog
      v-model="dialog"
      width="500"
      scrollable
    >
      <template v-slot:activator="{ on, attrs }">
        <v-btn
          elevation="2"
          class="ma-2"
          outlined
          color="primary"
          v-bind="attrs"
          v-on="on"
        >Spendeninformation</v-btn>
      </template>

      <v-card>
        <v-card-title class="text-h5 grey lighten-2">
          Spendeninformation
        </v-card-title>
        <v-card-text class="dialogs">
          <v-list two-line>
            <v-list-item>
              <v-list-item-icon>
                <v-icon color="indigo">
                  mdi-bank
                </v-icon>
              </v-list-item-icon>

              <v-list-item-content>
                <v-list-item-title>IBAN: DE88 8306 5408 0005 2314 18</v-list-item-title>
                <v-list-item-subtitle>Verwendungszweck: Du und dein Körper</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>

            <v-divider inset></v-divider>

            <v-list-item>
              <v-list-item-icon>
                <v-icon color="indigo">
                  mdi-credit-card-outline 
                  <!-- <span style="color:indigo">
                    <font-awesome-icon style="font-size: 12px, color: indigo;" icon="fa-brands fa-paypal" />
                  </span> -->
                </v-icon>
              </v-list-item-icon>

              <v-list-item-content>
                <v-list-item-title><form action="https://www.paypal.com/donate" method="post" target="_top">
<input type="hidden" name="hosted_button_id" value="JH9MQSU4NJGF2" />
<input type="image" src="https://www.paypalobjects.com/de_DE/DE/i/btn/btn_donate_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Spenden mit dem PayPal-Button" />
<img alt="" border="0" src="https://www.paypal.com/de_DE/i/scr/pixel.gif" width="1" height="1" />
</form>

</v-list-item-title>
                <v-list-item-subtitle>PayPal</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>

            <v-divider inset></v-divider>

            <v-list-item>
              <v-list-item-icon>
                <v-icon color="indigo">
                  mdi-gift
                </v-icon>
              </v-list-item-icon>

              <v-list-item-content>
                <v-list-item-title>erfurt-crowd.de</v-list-item-title>
                <v-list-item-subtitle>erfurt-crowd.de</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>

            <v-divider inset></v-divider>

            <v-list-item>
              <v-list-item-icon>
                <v-icon color="indigo">
                  mdi-gift
                </v-icon>
              </v-list-item-icon>

              <v-list-item-content>
                <v-list-item-title>GoFoundMe</v-list-item-title>
                <v-list-item-subtitle>GoFoundMe</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
            </v-list>
          <p>
            Info Spendenquittung: Die Spendenbescheinigung ist steuerlich absetzbar.
            <Kontakt text />
          </p>

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
  </div>
</template>

<script>
  export default {
    name: 'Projektberichte',
    components: {
      Kontakt: () => import('@/dialogs/Kontakt')
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
