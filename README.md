# PPG_CartButton
Oxid [oxhasrights] Erweiterung

Erweitert die [oxhasrights] Smarty-Funktion. Den Warenkorb-Button (TOBASKET) können nur angemeldete Benutzer in der
Benutzergruppe (in den Moduleinstellungen die OXID der Gruppe angeben) sehen.

Verwendung des Moduls auf eigene Gefahr, keine Garantie! 
Bitte immer DB Backup machen!

Anleitung:

- Das Modul ins Shopverzeichnis "modules" hochladen
- die SQL Datei im Shop unter Tools ausführen, Views aktualisieren und /tmp leeren
- Modul aktivieren
- Die gewünschte Benutzergruppen ID in den Moduleinstellungen eintragen
  (Bei den Benutzergruppen wird neu die OXID angezeigt zum kopieren! Kann NICHT editiert werden!!!)
- Beim Artikel im Reiter "Erweitert" ist nun ganz unten die Checkbox "Nur in Gruppe..?", diese anklicken und der Warenkorb-
  Button für diesen Artikel wird nicht mehr angezeigt

Dieses Modul Basiert auf dem Modul von Paul Lamp (pl_showprice), auf Github: https://github.com/spoilie/pl-showprice
