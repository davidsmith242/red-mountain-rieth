<template>
  <v-form v-model="valid">
    <v-text-field
      v-model="firstname"
      :rules="nameRules"
      :counter="30"
      label="Vorname"
      required
    ></v-text-field>
    <v-text-field
      v-model="lastname"
      :rules="nameRules"
      :counter="30"
      label="Nachname"
      required
    ></v-text-field>

    <v-text-field
      v-model="email"
      :rules="emailRules"
      label="E-mail"
      required
    ></v-text-field>
    <v-select
      v-model="select"
      :items="items"
      :rules="[v => !!v || 'Item is required']"
      label="Betreff"
      required
    ></v-select>
    <v-textarea
      label="Ihre Nachricht"
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
      v-model="sendCopy"
      label="Kopie der Nachricht per E-Mail senden"
    >
    </v-checkbox>
    <v-btn
        type="submit"
        :disabled="!valid"
      >
        Absenden
      </v-btn>
  </v-form>
</template>

<script>

export default {
  name: "KontaktDaten",
  data() {
    return {
      valid: false,
      firstname: '',
      lastname: '',
      nameRules: [
        v => !!v || 'Name ist Pflichtfeld',
        v => v.length <= 30 || 'Darf nicht länger als 30 Zeichen sein ',
      ],
      email: '',
      emailRules: [
        v => !!v || 'E-mail ist Pflichtfeld',
        v => /.+@.+/.test(v) || 'E-mail nicht gültig',
      ],
      select: 'Allgemeine Anfrage',
      items: [
        'Allgemeine Anfrage',
        'Spenden',
        'Verein',
        'Projektangebot',
      ],
      accept: false,
      sendCopy: false,
    };
  },
};
</script>

<style>
</style>