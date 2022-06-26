<template>
  <Projekt titel="Du und dein Körper (MP/01)">
    <h3 class="text-h5">Tagesgruppe "Sofioter Straße"</h3>
    <p class="text-body1">
      Die Tagesgruppe ist eine Hilfe zur Erziehung. Acht Schulkinder im Alter von 6 bis 14 Jahren 
      werden in einem geschützten Rahmen betreut.
      Die Familien erhalten durch die Tagesgruppe eine umfangreiche Unterstützung, wenn die soziale Entwicklung ihrer Kinder 
      gefährdet ist. Sozialpädagogische Gruppenangebote und individuelle Einzelbetreuung unterstützen das soziale Lernen in der 
      Gruppe. Die gezielte Förderung orientiert sich an den im Hilfeplan verankerten Zielen, die durch die Eltern, 
      Betreuer und Jugendamtsmitarbeiter gemeinsam vereinbart werden.
    </p>
    <Projektbericht1 />
  </Projekt>
</template>

<script>

  export default {
    name: 'SofioterStrasse',
    components: {
      Projekt: () => import('@/core/Projekt'),
      Projektbericht1: () => import('@/dialogs/Projektbericht1')
    },
  }
</script>
