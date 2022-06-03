<template>
  <v-card class="mb-16">
    <v-card-title class="text-h5 grey lighten-2">
      Datenschutz
    </v-card-title>
    <v-card-text>
      <v-list dense>
        <v-list-item
          v-for="(item, i) in contentList"
          :key="i"
        >
          <v-list-item-content>
            <v-list-item-title v-text="`${i + 1}) ${item}`"></v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
      <v-card elevation="0">
        <v-card-title>
          1) Präambel
        </v-card-title>
        <v-card-text>
          Wir legen größten Wert auf den Schutz Ihrer Daten und die Wahrung Ihrer Privatsphäre. Personenbezogene Daten sind gemäß Art. 4 Ziff. 1 DSGVO 
          alle Informationen, die sich auf eine identifizierte oder identifizierbare natürliche Person beziehen. Als identifizierbar wird eine natürliche 
          Person angesehen, die direkt oder indirekt identifiziert werden kann. Weitere Informationen hierzu finden Sie u.a. in Art. 4 Ziff. 1 DSGVO.
          <br>
          Diese Datenschutzerklärung kann jederzeit unter <a href="https://rmatrieth/datenschutz" target="_blank" rel="noopener noreferrer">https://rmatrieth/datenschutz</a> 
          abgerufen, abgespeichert und ausgedruckt werden.
          
          <h2 class="text-h5">
            Allgemeine Hinweise
          </h2>
          Die folgenden Hinweise geben einen einfachen Überblick darüber, was mit Ihren personenbezogenen Daten passiert, wenn Sie diese Website besuchen. 
          Personenbezogene Daten sind alle Daten, mit denen Sie persönlich identifiziert werden können. Ausführliche Informationen zum Thema 
          Datenschutz entnehmen Sie unserer unter diesem Text aufgeführten Datenschutzerklärung.
          
          <h2 class="text-h5">
            Datenerfassung auf dieser Website
          </h2>
          <h3 class="text-h6">
            Wer ist verantwortlich für die Datenerfassung auf dieser Website?
          </h3>
          Die Datenverarbeitung auf dieser Website erfolgt durch den Websitebetreiber. Dessen Kontaktdaten können Sie dem Impressum dieser Website entnehmen.

          <h3 class="text-h6">
            Wie erfassen wir Ihre Daten?
          </h3>              
            Ihre Daten werden zum einen dadurch erhoben, dass Sie uns diese mitteilen. Hierbei kann es sich z. B. um Daten handeln, die Sie in ein 
            Kontaktformular eingeben.
            <br><br>
            Andere Daten werden automatisch oder nach Ihrer Einwilligung beim Besuch der Website durch unsere IT- Systeme erfasst. Das sind vor allem 
            technische Daten (z. B. Internetbrowser, Betriebssystem, IP-Adresse oder Uhrzeit des Seitenaufrufs). Die Erfassung dieser Daten erfolgt 
            automatisch, sobald Sie diese Website betreten.

          <h3 class="text-h6">
            Wofür nutzen wir Ihre Daten?
          </h3>              
            Ein Teil der Daten wird erhoben, um eine fehlerfreie Bereitstellung der Website zu gewährleisten. Andere Daten können zur Analyse Ihres 
            Nutzerverhaltens verwendet werden.
          <h3 class="text-h6">
            Welche Rechte haben Sie bezüglich Ihrer Daten?
          </h3>              
            Sie haben jederzeit das Recht, unentgeltlich Auskunft über Herkunft, Empfänger und Zweck Ihrer gespeicherten personenbezogenen Daten zu 
            erhalten. Sie haben außerdem ein Recht, die Berichtigung oder Löschung dieser Daten zu verlangen. Wenn Sie eine Einwilligung zur 
            Datenverarbeitung erteilt haben, können Sie diese Einwilligung jederzeit für die Zukunft widerrufen. Außerdem haben Sie das Recht, unter 
            bestimmten Umständen die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen. Des Weiteren steht Ihnen ein 
            Beschwerderecht bei der zuständigen Aufsichtsbehörde zu.
            <br><br>
            Hierzu sowie zu weiteren Fragen zum Thema Datenschutz können Sie sich jederzeit unter der im Impressum angegebenen Adresse an uns wenden.
        </v-card-text>
      </v-card>
      <v-divider></v-divider>
      <v-card elevation="0">
        <v-card-title>
          2) Verantwortlicher
        </v-card-title>
        <v-card-text>
          Verantwortlicher im Sinne des Art. 4 Ziff. 7 DSGVO für die Verarbeitung personenbezogener Daten ist:
          
          Red Mountain@Rieth e.V.
          Charlottenstrasse 1
          99096 Erfurt
          Vereinsführung: Jens Cramer
          
          <h3 class="text-h6">
            Redaktionell verantwortlich:
          </h3> 
          Jens Cramer <br>
          Charlottenstrasse 1 <br>
          99096 Erfurt
          <br><br>
          David Schmitt <br>
          Silbergraben 82 <br>
          99097 Erfurt
        </v-card-text>
      </v-card>

      <v-divider></v-divider>

      <v-card elevation="0">
        <v-card-title>
          3) Ansprechpartner für Datenschutz
        </v-card-title>
        <v-card-text>
          Bei Fragen zur Verarbeitung Ihrer personenbezogenen Daten, sowie zu Ihren Rechten rund um den Datenschutz wenden Sie sich bitte an:
          <br><br>
          Red Mountain@Rieth e.V.<br>
          Charlottenstrasse 1<br>
          99096 Erfurt<br>

          E-Mail: <a href="mailto:redmountainatrieth@hotmail.com ">redmountainatrieth@hotmail.com </a>
        </v-card-text>
      </v-card>

      <v-divider></v-divider>

      <v-card elevation="0">
        <v-card-title>
          4) Kontaktaufnahme
        </v-card-title>
        <v-card-text>
          Sie haben die Möglichkeit mit uns postalisch oder per E-Mail in Kontakt zu treten. Nehmen Sie postalisch Kontakt zu uns auf, so können wir 
          insbesondere Ihre Adressdaten (z.B. Name, Vorname, Straße, Wohnort, Postleitzahl), Datum und Zeitpunkt des Posteinganges sowie jene Daten, 
          welche sich aus Ihrem Schreiben selbst ergeben, verarbeiten.
          <br><br>
          Bei einer Kontaktaufnahme per E-Mail werden insbesondere Ihre E-Mailadresse, Zeitpunkt der E-Mail sowie diejenigen Daten, welche sich aus 
          dem Nachrichtentext (ggfs. auch Anhänge) ergeben, verarbeitet.
          <br><br>
          Zweck der Verarbeitung der o.g. Daten ist es, die Kontaktanfrage zu bearbeiten und zur Beantwortung des Anliegens mit dem Anfragenden in 
          Kontakt treten zu können. Rechtsgrundlage für die hier beschriebene Verarbeitung personenbezogener Daten ist Art. 6 Abs. 1 lit. f) DSGVO. 
          Unser berechtigtes Interesse ist es, Ihnen die Möglichkeit zu bieten sich jederzeit an uns wenden zu können und Ihre Anfragen beantworten 
          zu können.
          <br><br>
          Die personenbezogenen Daten werden gelöscht, sobald sie für die Erreichung des Zweckes ihrer Erhebung nicht mehr erforderlich sind.
        </v-card-text>
      </v-card>

      <v-divider></v-divider>

      <v-card elevation="0">
        <v-card-title>
          5) Externes Hosting
        </v-card-title>
        <v-card-text>
          Diese Website wird bei einem externen Dienstleister gehostet (Hoster). Die personenbezogenen Daten, die auf dieser Website erfasst werden, 
          werden auf den Servern des Hosters gespeichert. Hierbei kann es sich v. a. um IP-Adressen, Kontaktanfragen, Meta- und Kommunikationsdaten, 
          Vertragsdaten, Kontaktdaten, Namen, Websitezugriffe und sonstige Daten, die über eine Website generiert werden, handeln.
          <br><br>
          Der Einsatz des Hosters erfolgt zum Zwecke der Vertragserfüllung gegenüber unseren potenziellen und bestehenden Kunden (Art. 6 Abs. 1 lit. b DSGVO)
           und im Interesse einer sicheren, schnellen und effizienten Bereitstellung unseres Online-Angebots durch einen professionellen Anbieter 
           (Art. 6 Abs. 1 lit. f DSGVO).
          <br><br>
          Unser Hoster wird Ihre Daten nur insoweit verarbeiten, wie dies zur Erfüllung seiner Leistungspflichten erforderlich ist und unsere Weisungen 
          in Bezug auf diese Daten befolgen.
          <br><br>
          Wir setzen folgenden Hoster ein:<br>
          ALL-INKL.COM<br>
          Hauptstraße 68<br>
          D-02742 Friedersdorf <br>
        </v-card-text>
      </v-card>

      <v-divider></v-divider>

      <v-card elevation="0">
        <v-card-title>
          6) Google Fonts
        </v-card-title>
        <v-card-text>
          <p>
          Auf unserer Website nutzen wir Schriften von Google Fonts. Für den europäischen Raum ist das Unternehmen Google Ireland Limited (Gordon House, Barrow Street Dublin 4, Irland) für alle Google-Dienste verantwortlich. <br>
          Wenn Sie unsere Webseite besuchen, werden die Schriften über einen Google-Server nachgeladen. Durch diesen externen Aufruf werden Daten an die Google-Server übermittelt. So erkennt Google auch, dass Sie bzw. Ihre IP-Adresse unsere Webseite besuchen.
          Google Fonts wurde entwickelt, um Verwendung, Speicherung und Erfassung von Endnutzerdaten auf das zu reduzieren, was für eine ordentliche Bereitstellung von Schriften nötig ist. Die Font-Dateien werden bei Google ein Jahr gespeichert.<br>
          Google verfolgt damit das Ziel, die Ladezeit von Webseiten grundsätzlich zu verbessern. Wenn Millionen von Webseiten auf die gleichen Schriften verweisen, werden sie nach dem ersten Besuch zwischengespeichert und erscheinen sofort auf allen anderen später besuchten Webseiten wieder. Manchmal aktualisiert Google Schriftdateien, um die Dateigröße zu reduzieren, die Abdeckung von Sprache zu erhöhen und das Design zu verbessern.<br>
          Jene Daten, die Google für einen Tag bzw. ein Jahr speichert können nicht einfach gelöscht werden. Die Daten werden beim Seitenaufruf automatisch an Google übermittelt.
          Um diese Daten vorzeitig löschen zu können, müssen Sie den Google-Support auf <a href="https://support.google.com/?hl=de&tid=331597064861" target="_blank" rel="noopener noreferrer">https://support.google.com/?hl=de&tid=331597064861</a> kontaktieren.<br>
          Datenspeicherung verhindern Sie in diesem Fall nur, wenn Sie unsere Seite nicht besuchen. Welche Daten grundsätzlich von Google erfasst werden und wofür diese Daten verwendet werden, können Sie auch auf https://www.google.com/intl/de/policies/privacy/ nachlesen.
          </p>
        </v-card-text>
      </v-card>

      <v-divider></v-divider>

      <v-card elevation="0">
        <v-card-title>
          7) Änderung der Datenschutzerklärung
        </v-card-title>
        <v-card-text>
          Gesetzesänderungen oder Änderungen unserer unternehmensinternen Prozesse können eine Anpassung dieser Datenschutzerklärung erforderlich machen. 
          Für den Fall einer solchen Änderung werden wir Ihnen dies oberhalb der Überschrift „Datenschutzerklärung“ mitteilen.

          <h2 class="text-h5">
            Allgemeine Hinweise und Pflichtinformationen Datenschutz
          </h2>
          Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln Ihre personenbezogenen Daten vertraulich und 
          entsprechend der gesetzlichen Datenschutzvorschriften sowie dieser Datenschutzerklärung.
          <br><br>
          Wenn Sie diese Website benutzen, werden verschiedene personenbezogene Daten erhoben. Personenbezogene Daten sind Daten, mit denen Sie 
          persönlich identifiziert werden können.
          <br><br>
          Die vorliegende Datenschutzerklärung erläutert, welche Daten wir erheben und wofür wir sie nutzen. Sie erläutert auch, wie und zu welchem 
          Zweck das geschieht.
          <br><br>
          Wir weisen darauf hin, dass die Datenübertragung im Internet (z. B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. 
          Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich.

          <h3 class="text-h6">
            Hinweis zur verantwortlichen Stelle
          </h3>
          Die verantwortliche Stelle für die Datenverarbeitung auf dieser Website ist: <br><br>

          <strong>Red Mountain@Rieth e.V</strong><br>
          Charlottenstrasse 1 <br>
          99096 Erfurt <br><br>

          E-Mail: <a href="mailto:redmountainatrieth@hotmail.com ">redmountainatrieth@hotmail.com </a><br><br>

          Verantwortliche Stelle ist die natürliche oder juristische Person, die allein oder gemeinsam mit anderen über die Zwecke und Mittel der 
          Verarbeitung von personenbezogenen Daten (z. B. Namen, E-Mail-Adressen o. Ä.) entscheidet.

          <h3 class="text-h6">
            Speicherdauer
          </h3>
          Soweit innerhalb dieser Datenschutzerklärung keine speziellere Speicherdauer genannt wurde, verbleiben Ihre personenbezogenen Daten bei uns, 
          bis der Zweck für die Datenverarbeitung entfällt. Wenn Sie ein berechtigtes Löschersuchen geltend machen oder eine Einwilligung zur 
          Datenverarbeitung widerrufen, werden Ihre Daten gelöscht, sofern wir keinen anderen rechtlich zulässigen Gründe für die Speicherung 
          Ihrer personenbezogenen Daten haben (z.B. steuer- oder handelsrechtliche Aufbewahrungsfristen); im letztgenannten Fall erfolgt die 
          Löschung nach Fortfall dieser Gründe.

          <h3 class="text-h6">
            Widerruf Ihrer Einwilligung zur Datenverarbeitung
          </h3>
          Viele Datenverarbeitungsvorgänge sind nur mit Ihrer ausdrücklichen Einwilligung möglich. Sie können eine bereits erteilte Einwilligung 
          jederzeit widerrufen. Die Rechtmäßigkeit der bis zum Widerruf erfolgten Datenverarbeitung bleibt vom Widerruf unberührt.
          
          <h3 class="text-h6">
            Widerspruchsrecht gegen die Datenerhebung in besonderen Fällen sowie gegen Direktwerbung (Art. 21 DSGVO)
          </h3>
          WENN DIE DATENVERARBEITUNG AUF GRUNDLAGE VON ART. 6 ABS. 1 LIT. E ODER F DSGVO ERFOLGT, HABEN SIE JEDERZEIT DAS RECHT, AUS GRÜNDEN, DIE 
          SICH AUS IHRER BESONDEREN SITUATION ERGEBEN, GEGEN DIE VERARBEITUNG IHRER PERSONENBEZOGENEN DATEN WIDERSPRUCH EINZULEGEN; DIES GILT AUCH 
          FÜR EIN AUF DIESE BESTIMMUNGEN GESTÜTZTES PROFILING. DIE JEWEILIGE RECHTSGRUNDLAGE, AUF DENEN EINE VERARBEITUNG BERUHT, ENTNEHMEN SIE DIESER 
          DATENSCHUTZERKLÄRUNG. WENN SIE WIDERSPRUCH EINLEGEN, WERDEN WIR IHRE BETROFFENEN PERSONENBEZOGENEN DATEN NICHT MEHR VERARBEITEN, ES SEI DENN, 
          WIR KÖNNEN ZWINGENDE SCHUTZWÜRDIGE GRÜNDE FÜR DIE VERARBEITUNG NACHWEISEN, DIE IHRE INTERESSEN, RECHTE UND FREIHEITEN ÜBERWIEGEN ODER DIE 
          VERARBEITUNG DIENT DER GELTENDMACHUNG, AUSÜBUNG ODER VERTEIDIGUNG VON RECHTSANSPRÜCHEN (WIDERSPRUCH NACH ART. 21 ABS. 1 DSGVO).
          <br><br>
          WERDEN IHRE PERSONENBEZOGENEN DATEN VERARBEITET, UM DIREKTWERBUNG ZU BETREIBEN, SO HABEN SIE DAS RECHT, JEDERZEIT WIDERSPRUCH GEGEN DIE 
          VERARBEITUNG SIE BETREFFENDER PERSONENBEZOGENER DATEN ZUM ZWECKE DERARTIGER WERBUNG EINZULEGEN; DIES GILT AUCH FÜR DAS PROFILING, SOWEIT 
          ES MIT SOLCHER DIREKTWERBUNG IN VERBINDUNG STEHT. WENN SIE WIDERSPRECHEN, WERDEN IHRE PERSONENBEZOGENEN DATEN ANSCHLIESSEND NICHT MEHR ZUM 
          ZWECKE DER DIREKTWERBUNG VERWENDET (WIDERSPRUCH NACH ART. 21 ABS. 2 DSGVO).

          <h3 class="text-h6">
            Beschwerderecht bei der zuständigen Aufsichtsbehörde
          </h3>
          Im Falle von Verstößen gegen die DSGVO steht den Betroffenen ein Beschwerderecht bei einer Aufsichtsbehörde, insbesondere in dem 
          Mitgliedstaat ihres gewöhnlichen Aufenthalts, ihres Arbeitsplatzes oder des Orts des mutmaßlichen Verstoßes zu. Das Beschwerderecht besteht 
          unbeschadet anderweitiger verwaltungsrechtlicher oder gerichtlicher Rechtsbehelfe.

          <h3 class="text-h6">
            Recht auf Datenübertragbarkeit
          </h3>
          Sie haben das Recht, Daten, die wir auf Grundlage Ihrer Einwilligung oder in Erfüllung eines Vertrags automatisiert verarbeiten, an sich 
          oder an einen Dritten in einem gängigen, maschinenlesbaren Format aushändigen zu lassen. Sofern Sie die direkte Übertragung der Daten an 
          einen anderen Verantwortlichen verlangen, erfolgt dies nur, soweit es technisch machbar ist.

          <h3 class="text-h6">
            SSL- bzw. TLS-Verschlüsselung
          </h3>
          Diese Seite nutzt aus Sicherheitsgründen und zum Schutz der Übertragung vertraulicher Inhalte, wie zum Beispiel Bestellungen oder Anfragen, 
          die Sie an uns als Seitenbetreiber senden, eine SSL- bzw. TLS- Verschlüsselung. Eine verschlüsselte Verbindung erkennen Sie daran, dass die 
          Adresszeile des Browsers von „http://“ auf „https://“ wechselt und an dem Schloss-Symbol in Ihrer Browserzeile.
          <br><br>
          Wenn die SSL- bzw. TLS-Verschlüsselung aktiviert ist, können die Daten, die Sie an uns übermitteln, nicht von Dritten mitgelesen werden.

          <h3 class="text-h6">
            Auskunft, Löschung und Berichtigung
          </h3>
          Sie haben im Rahmen der geltenden gesetzlichen Bestimmungen jederzeit das Recht auf unentgeltliche Auskunft über Ihre gespeicherten 
          personenbezogenen Daten, deren Herkunft und Empfänger und den Zweck der Datenverarbeitung und ggf. ein Recht auf Berichtigung oder 
          Löschung dieser Daten. Hierzu sowie zu weiteren Fragen zum Thema personenbezogene Daten können Sie sich jederzeit unter der im 
          Impressum angegebenen Adresse an uns wenden.

          <h3 class="text-h6">
            Recht auf Einschränkung der Verarbeitung
          </h3>
          Sie haben das Recht, die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen. Hierzu können Sie sich jederzeit unter 
          der im Impressum angegebenen Adresse an uns wenden. Das Recht auf Einschränkung der Verarbeitung besteht in folgenden Fällen:
          <br><br>
          Wenn Sie die Richtigkeit Ihrer bei uns gespeicherten personenbezogenen Daten bestreiten, benötigen wir in der Regel Zeit, um dies zu überprüfen. 
          Für die Dauer der Prüfung haben Sie das Recht, die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.
          <br><br>
          Wenn die Verarbeitung Ihrer personenbezogenen Daten unrechtmäßig geschah/geschieht, können Sie statt der Löschung die Einschränkung der 
          Datenverarbeitung verlangen.
          <br><br>
          Wenn wir Ihre personenbezogenen Daten nicht mehr benötigen, Sie sie jedoch zur Ausübung, Verteidigung oder Geltendmachung von Rechtsansprüchen 
          benötigen, haben Sie das Recht, statt der Löschung die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.
          <br><br>
          Wenn Sie einen Widerspruch nach Art. 21 Abs. 1 DSGVO eingelegt haben, muss eine Abwägung zwischen Ihren und unseren Interessen vorgenommen werden. 
          Solange noch nicht feststeht, wessen Interessen überwiegen, haben Sie das Recht, die Einschränkung der Verarbeitung Ihrer personenbezogenen 
          Daten zu verlangen.
          <br><br>
          Wenn Sie die Verarbeitung Ihrer personenbezogenen Daten eingeschränkt haben, dürfen diese Daten – von ihrer Speicherung abgesehen – nur mit 
          Ihrer Einwilligung oder zur Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen oder zum Schutz der Rechte einer anderen natürlichen 
          oder juristischen Person oder aus Gründen eines wichtigen öffentlichen Interesses der Europäischen Union oder eines Mitgliedstaats verarbeitet 
          werden.

          <h3 class="text-h6">
            Anfrage per E-Mail oder Telefon
          </h3>
          Wenn Sie uns per E-Mail oder Telefon kontaktieren, wird Ihre Anfrage inklusive aller daraus hervorgehenden personenbezogenen 
          Daten (Name, Anfrage) zum Zwecke der Bearbeitung Ihres Anliegens bei uns gespeichert und verarbeitet. Diese Daten geben wir nicht 
          ohne Ihre Einwilligung weiter.
          <br><br>
          Die Verarbeitung dieser Daten erfolgt auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO, sofern Ihre Anfrage mit der Erfüllung eines 
          Vertrags zusammenhängt oder zur Durchführung vorvertraglicher Maßnahmen erforderlich ist. In allen übrigen Fällen beruht die Verarbeitung 
          auf unserem berechtigten Interesse an der effektiven Bearbeitung der an uns gerichteten Anfragen (Art. 6 Abs. 1 lit. f DSGVO) oder auf 
          Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO) sofern diese abgefragt wurde.
          <br><br>
          Die von Ihnen an uns per Kontaktanfragen übersandten Daten verbleiben bei uns, bis Sie uns zur Löschung auffordern, Ihre Einwilligung zur 
          Speicherung widerrufen oder der Zweck für die Datenspeicherung entfällt (z. B. nach abgeschlossener Bearbeitung Ihres Anliegens). 
          Zwingende gesetzliche Bestimmungen – insbesondere gesetzliche Aufbewahrungsfristen – bleiben unberührt.
        </v-card-text>
      </v-card>
    </v-card-text>
  </v-card>
</template>

<script>
  export default {
    name: 'Datenschutz',
    // props: ['text'],
    // components: {
    //   KontaktDaten: () => import('@/core/KontaktDaten'),
    //   KontaktFormular: () => import('@/core/KontaktForm'),
    // },
    data: () => {
      return {
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
