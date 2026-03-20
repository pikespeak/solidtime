<?php

declare(strict_types=1);

return [
    'clockify_time_entries' => [
        'name' => 'Clockify Zeiteinträge',
        'description' => '1. Stellen Sie zunächst sicher, dass Sie das Datumsformat auf "MM/TT/JJJJ" und das Zeitformat auf "12-Stunden" in den Benutzereinstellungen eingestellt haben.<br>'.
            '2. Ändern Sie auf derselben Einstellungsseite die Sprache von Clockify auf Englisch.<br>'.
            '3. Gehen Sie zu BERICHTE -> ZEIT -> Detailliert in der Navigation links. <br>'.
            '4. Wählen Sie nun den Zeitraum aus, den Sie exportieren möchten, rechts oben. '.
            'Im kostenlosen Clockify-Plan ist es derzeit nicht möglich, mehr als ein Jahr auszuwählen. '.
            'Sie können jedes Jahr einzeln exportieren und nacheinander importieren.'.
            '<br> 4. Klicken Sie nun auf Export -> Als CSV speichern. Das Export-Dropdown befindet sich in der Kopfzeile der Exporttabelle links vom Druckersymbol. '.
            '<br><br>Stellen Sie vor dem Import sicher, dass die Zeitzoneneinstellungen in Clockify mit denen in solidtime übereinstimmen.',
    ],
    'generic_projects' => [
        'name' => 'Generische Projekte',
        'description' => 'Wenn Sie viele Projekte selbst importieren möchten, ist dieser Importer die richtige Wahl. Weitere Informationen zur CSV-Struktur finden Sie in unserer <a href="https://docs.solidtime.io/user-guide/import">Dokumentation</a>.',
    ],
    'generic_time_entries' => [
        'name' => 'Generische Zeiteinträge',
        'description' => 'Wenn Sie viele Zeiteinträge selbst importieren möchten, ist dieser Importer die richtige Wahl. Weitere Informationen zur CSV-Struktur finden Sie in unserer <a href="https://docs.solidtime.io/user-guide/import">Dokumentation</a>.',
    ],
    'clockify_projects' => [
        'name' => 'Clockify Projekte',
        'description' => '1. Stellen Sie sicher, dass die Sprache von Clockify unter "Einstellungen -> Allgemein" auf Englisch eingestellt ist.<br>'.
            '2. Gehen Sie zu PROJEKTE in der Navigation links.<br> '.
            '3. Klicken Sie auf die drei Punkte rechts neben dem Projekt, das Sie exportieren möchten, und wählen Sie Exportieren.<br> '.
            '4. Klicken Sie auf Export -> Als CSV speichern. Das Export-Dropdown befindet sich in der Kopfzeile der Exporttabelle rechts oben.',
    ],
    'toggl_data_importer' => [
        'name' => 'Toggl Datenimporter',
        'description' => '1. Gehen Sie zu Admin -> Einstellungen -> Datenexport. <br>'.
            '2. Wählen Sie unter "Datenexport" alle Elemente zum Export aus und klicken Sie auf "Per E-Mail exportieren". <br> '.
            '3. Sie erhalten eine E-Mail mit einem Download-Link. Laden Sie die ZIP-Datei herunter und laden Sie sie hier hoch. '.
            '<br><br>Der "Datenexport" exportiert alles außer Zeiteinträgen. '.
            'Wenn Sie auch Zeiteinträge importieren möchten, verwenden Sie anschließend den "Toggl Zeiteinträge"-Importer.',
    ],
    'toggl_time_entries' => [
        'name' => 'Toggl Zeiteinträge',
        'description' => '<strong>Wichtig:</strong> Wenn Sie eine Toggl-Organisation importieren möchten, verwenden Sie zuerst den "Toggl Datenimporter", da dieser Export mehr Details enthält. '.
            '<br><br>1. Gehen Sie zu Admin -> Einstellungen -> Datenexport. <br>2. Wählen Sie unter "Zeiteinträge" das Jahr aus, das Sie exportieren möchten, und klicken Sie auf "Zeiteinträge exportieren". <br><br>Sie können alle Jahre nacheinander exportieren und importieren. '.
            ' <br>Stellen Sie vor dem Import sicher, dass die Zeitzoneneinstellungen in Toggl mit denen in solidtime übereinstimmen.',
    ],
    'solidtime_importer' => [
        'name' => 'Solidtime',
        'description' => '1. Wählen Sie die Organisation, die Sie exportieren möchten, im Dropdown-Menü links oben<br>2. Klicken Sie auf "Export" in der linken Navigation unter "Admin" (Sie müssen Admin oder Eigentümer der Organisation sein, um dies zu sehen)<br>3. Klicken Sie auf "Export". <br>4. Speichern Sie die Datei und laden Sie sie hier hoch.',
    ],
    'harvest_clients' => [
        'name' => 'Harvest Kunden',
        'description' => '1. Gehen Sie zu "Verwalten" (obere Navigation)<br>2. Klicken Sie auf "Kunden"'.
            '<br>3. Klicken Sie auf "Import/Export" und im Dropdown auf "Kunden als CSV exportieren" '.
            '<br>',
    ],
    'harvest_projects' => [
        'name' => 'Harvest Projekte',
        'description' => '1. Gehen Sie zu "Projekte" (obere Navigation)<br>2. Klicken Sie auf die Schaltfläche "Export"'.
            '<br>3. Wählen Sie aus, welche Projekte Sie exportieren möchten, und wählen Sie das CSV-Format '.
            '<br><br>Stellen Sie vor dem Import sicher, dass die Zeitzoneneinstellungen in Harvest mit denen in solidtime übereinstimmen.',
    ],
    'harvest_time_entries' => [
        'name' => 'Harvest Zeiteinträge',
        'description' => '1. Gehen Sie zu Einstellungen (rechts oben)<br>2. Klicken Sie auf "Import/Export" in der linken Navigation'.
            '<br>3. Klicken Sie auf "Alle Zeiten exportieren" '.
            '<br><br>Stellen Sie vor dem Import sicher, dass die Zeitzoneneinstellungen in Harvest mit denen in solidtime übereinstimmen.',
    ],
];
