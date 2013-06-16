<?php
	$lang['admin']['plugin']['submenu']['googlesearchbox'] = 'GoogleSearchBox';

	$lang['admin']['plugin']['googlesearchbox'] = array(
		'head'		=> 'Google SearchBox Konfiguration',
		'description'=>'Die Google SearchBox erweitert die Standard-FlatPress-Suche um die Fähigkeit, über Google zu suchen. Voraussetzung für die Suche über Google ist eine fertig eingerichtete benutzerdefinierte Google-Suche (siehe http://www.google.com/cse/). Die Darstellung der Suchergebnisse hat iframe-Charakter. Es ist erforderlich, eine statische Zielseite einzurichten, auf der der von Google bereitgestellte Code für die Suchergebnisse einzutragen ist. Fülle bitte außerdem die Felder unten mit den Werten, die Google für das Suchfeld bereitstellt.',
		'searchbox_settings'=> 'SearchBox Darstellung',
		'bigbox'=> 'Zeige das erweiterte Suchfeld',
		'searchType'=> 'Such-Typ',
		'searchTypeTitle'=> 'Nur Titel',
		'searchTypeFull'=> 'Volltext',
		'searchTypeGoogle'=> 'Via Google',		
		'google_settings'=> 'Google Einstellungen',
		'destn'	=> 'Ziel',
		'destn_long'	=> 'Name der statischen Seite, die das Suchergebnis anzeigen soll',
		'cx'	=> 'cx',
		'cx_long'	=> 'Eindeutige ID der Suchmaschine',
		'cof'	=> 'cof',
		'cof_long'	=> 'Position von Google-Anzeigen',
		'ie'	=> 'ie',
		'ie_long'	=> 'Suchmaschinenkodierung, wie bei Google eingestellt; z.B. UTF-8',
		'submit'	=> 'Speichern'
	);

	$lang['admin']['plugin']['googlesearchbox']['msgs'] = array(
		1		=> 'GoogleSearchBox Einstellungen gesichert.',
		-1		=> 'GoogleSearchBox Einstellungen nicht gesichert!'
	);

	$lang['plugin']['googlesearchbox'] = array(
		'web'	=> 'Web'
	);

	$lang['plugin']['googlesearchbox']['errors'] = array (
		-1	=> 'GoogleSearchBox Einstellungen nicht gesichert. Prüfe die Einstellungen im GoogleSearchBox-Plugin.'
	);

?>
