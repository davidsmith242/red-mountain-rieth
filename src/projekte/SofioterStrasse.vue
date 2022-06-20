<template>
  <Projekt titel="07/2022 Tagesgruppe Sofioter Straße">
    <h3 class="text-h5">Erste Überschrift</h3>
    <p class="text-body1">
      hier kommt der erste Absatz
      Änderung 1
    </p>
  </Projekt>
</template>

<script>
  export default {
    name: 'SofioterStrasse',
    components: {
      Projekt: () => import('@/core/Projekt')
    },
  }
</script>
