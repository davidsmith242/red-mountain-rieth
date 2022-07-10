<template>
  <Projekt titel="Tagesgruppe &quot;Sofioter Straße&quot;">
    <p class="text-body1">
      Die Tagesgruppe ist eine Hilfe zur Erziehung. Acht Schulkinder im Alter von 6 bis 14 Jahren 
      werden in einem geschützten Rahmen betreut. Die Familien erhalten durch die Tagesgruppe eine umfangreiche Unterstützung, wenn die soziale Entwicklung ihrer Kinder 
      gefährdet ist. 
    </p>
    <Projektbericht1 /> <SpendenInfo title="Jetzt Spenden" />
  </Projekt>
</template>

<script>

  export default {
    name: 'SofioterStrasse',
    components: {
      Projekt: () => import('@/core/Projekt'),
      Projektbericht1: () => import('@/dialogs/Projektbericht1'),
      SpendenInfo: () => import('@/dialogs/SpendenInfo'),
    },
  }
</script>
