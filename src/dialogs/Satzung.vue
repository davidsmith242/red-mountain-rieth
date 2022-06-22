<template>
  <div class="text-left">
    <v-dialog
      v-model="dialog"
      min-width="500"
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
          block
        >Satzung</v-btn>
      </template>

      <v-card>
        <v-card-title class="text-h5 grey lighten-2">
          Satzung
        </v-card-title>

        <v-card-text class="dialogs">
          <div>
            <pdf
              v-for="i in numPages"
              :key="i"
              :src="src"
              :page="i"
              style="display: inline-block; width: 100%"
              ref="myPdfComponent"
            ></pdf>
          </div>
        </v-card-text>

        <v-divider></v-divider>

        <v-card-actions>
          <v-spacer></v-spacer>
          <!-- <v-btn 
            color="primary"
            text @click="$refs.myPdfComponent.print()">
            Drucken
          </v-btn> -->
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
  import pdf from 'vue-pdf';

  const loadingTask = pdf.createLoadingTask('2022-06_RedMountainRieth_Satzung.pdf');

  export default {
    name: 'Satzung',
    components: {
      pdf
    },
    data: () => {
      return {
        dialog: false,
        src: loadingTask,
        numPages: undefined,
      }
    },
    mounted() {

      this.src.promise.then(pdf => {

        this.numPages = pdf.numPages;
      });
    },
  }
</script>

<style>
  
</style>
