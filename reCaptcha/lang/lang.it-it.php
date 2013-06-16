<?php
	$lang['admin']['plugin']['submenu']['recaptcha'] = 'reCaptcha';

	$lang['admin']['plugin']['recaptcha'] = array(
		'head'		=> 'Configurazione reCaptcha',
		'description'=>'<a href="http://www.google.com/recaptcha">reCaptcha</a> riduce ed elimina '
					 .'completamente lo spam che affligge il tuo sito. '
					 .'Per configurare questo plugin è necessario avere le chiavi pubbliche e private, fornite da '
           .' <a href="http://www.google.com/recaptcha">reCaptcha</a>.',
		'privatekey'	=> 'reCaptcha chiave privata',
		'publickey'	=> 'reCaptcha chiave pubblica',
		'submit'	=> 'Salva',
    'theme' => 'Tema grafico reCaptcha'
	);

	$lang['admin']['plugin']['recaptcha']['msgs'] = array(
		1		=> 'Chiavi reCaptcha salvate',
		-1		=> 'Chiavi reCaptcha non salvate'
	);

	$lang['plugin']['recaptcha'] = array(
		'prefix'	=> 'Per prevenire l\'abuso dei commenti, sei pregato di inserire la quanto riportato di seguito :',		
		'error'		=> 'Errore nell\'inserimento, prego riprovare.'	
		'customtranslations' => '{
												instructions_visual : \"Scrivi le due parole:\",
												instructions_audio : \"Trascrivi ci\\u00f2 che senti:\",
												play_again : \"Riascolta la traccia audio\",
												cant_hear_this : \"Scarica la traccia in formato MP3\",
												visual_challenge : \"Modalit\\u00e0 visiva\",
												audio_challenge : \"Modalit\\u00e0 auditiva\",
												refresh_btn : \"Chiedi due nuove parole\",
												help_btn : \"Aiuto\",
												incorrect_try_again : \"Non corretto. Riprova.\"
								}'
	);

	$lang['plugin']['recaptcha']['errors'] = array (
		-1	=> 'reCaptcha non è configurato. Controllare le impostazione del plugin reCaptcha'
	);

?>
