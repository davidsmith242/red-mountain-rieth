<template>
  <div>
    <v-form v-model="valid" @submit="onSubmit">
      <v-text-field
        v-model="vorname"
        :rules="nameRules"
        :counter="30"
        label="Vorname"
        required
      ></v-text-field>
      <v-text-field
        v-model="name"
        :rules="nameRules"
        :counter="30"
        label="Nachname"
        required
      ></v-text-field>

      <v-text-field
        v-model="firma"
        :rules="nameRules"
        :counter="30"
        label="Firma"
      ></v-text-field>

      <v-text-field
        v-model="email"
        :rules="emailRules"
        label="E-mail"
        required
      ></v-text-field>
      <v-text-field
        v-model="telefon"
        label="Telefon"
      ></v-text-field>
      <v-select
        v-model="betreff"
        :items="items"
        :rules="[v => !!v || 'Item is required']"
        label="Betreff"
        required
      ></v-select>
      <v-textarea
        label="Ihre Nachricht"
        v-model="nachricht"
        auto-grow
        outlined
        rows="4"
        row-height="15"
      ></v-textarea>
      <v-checkbox
        v-model="accept"
        :rules="[v => !!v || 'Sie müssen der Datenschutzerlärung zustimmen!']"
        required
      >
        <template v-slot:label>
          <router-link to="/datenschutz">Ich stimme der Datenschutz­erklärung zu.</router-link>
        </template>
      </v-checkbox>
      <v-checkbox
        v-model="kopie"
        label="Kopie der Nachricht per E-Mail senden"
        false-value="0"
        true-value="1"
      >
      </v-checkbox>
      <div v-if="isSending" class="loading">Senden...</div>
      <v-btn
          type="submit"
          :disabled="!valid"
        >
          Absenden
        </v-btn>
    </v-form>
  </div>
</template>

<script>
import router from '../routes.js'

export default {
  name: "KontaktDaten",
  data() {
    return {
      valid: false,
      vorname: '',
      name: '',
      nameRules: [
        v => !!v || 'Name ist Pflichtfeld',
        v => v.length <= 30 || 'Darf nicht länger als 30 Zeichen sein ',
      ],
      firma: '',
      email: '',
      telefon:'',
      emailRules: [
        v => !!v || 'E-mail ist Pflichtfeld',
        v => /.+@.+/.test(v) || 'E-mail nicht gültig',
      ],
      betreff: 'Allgemeine Anfrage',
      nachricht: '',
      items: [
        'Allgemeine Anfrage',
        'Spenden',
        'Verein',
        'Projektangebot',
      ],
      accept: false,
      kopie: 0,
      isSending: false
    };
  },
  methods: {

		/**
		 * Clear the form
		 */	
		clearForm() {
			for (let field in this.contact) {
				this.contact[field] = ''
			}
		},

		/**
		 * Handler for submit
		 */	
		onSubmit(evt) {
			evt.preventDefault();

			this.isSending = true;

			setTimeout(() => {
				// Build for data
				let form = new FormData();
				// for (let field in this.contact) {
				// form.append(field, this.contact[field]);
				// }

        form.append('vorname', this.vorname);
        form.append('name', this.name);
        form.append('firma', this.firma);
        form.append('email', this.email);
        form.append('telefon', this.telefon);
        form.append('betreff', this.betreff);
        form.append('nachricht', this.nachricht);
        form.append('kopie', this.kopie);

				// Send form to server	
				this.$http.post('api/contact.php', form).then((response) => {
          console.log('####');
					console.log(response);
					// this.clearForm();
					this.isSending = false;
          router.push('/kontaktdanke')
				}).catch((e) => {
					console.log(e)
				});

			}, 500);
		}
	}
};
</script>

<style>
</style>