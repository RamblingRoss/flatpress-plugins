<?php
	$lang['admin']['plugin']['submenu']['recaptcha'] = 'reCaptcha';

	$lang['admin']['plugin']['recaptcha'] = array(
		'head'		=> 'reCaptcha Configuration',
		'description'=>'For many people, <a href="http://www.google.com/recaptcha">reCaptcha</a> will greatly reduce '
					 .'or even completely eliminate automated spam you get on your site. '
					 .'To configure this plugin you require both private and public keys which will be provided when you '
					 .'register with <a href="http://www.google.com/recaptcha">reCaptcha</a>.',
		'privatekey' => 'reCaptcha private key',
		'publickey' => 'reCaptcha public key',
		'submit' => 'Save configuration',
		'theme' => 'reCaptcha theme'
	);

	$lang['admin']['plugin']['recaptcha']['msgs'] = array(
		1		=> 'reCaptcha configuration saved',
		-1		=> 'reCaptcha configuration not saved'
	);

	/*
	The 'customtranslations' allows elements of the reCaptcha UI to be overridden. For example to change how the text 
	displayed by the refresh and help buttons the following entry could be provided...
	{
		refresh_btn : “Refresh”,
		help_btn : “What do I do?”,
	}
	
	Note, if any override is provided then the enclosing curly braces must also be present.
	
	For further information see http://code.google.com/apis/recaptcha/docs/customization.html
	*/
	$lang['plugin']['recaptcha'] = array(
		'prefix' => 'As a way to prevent abuse of this commenting system please complete the following CAPTCHA:',
		'error' => 'ERROR: The CAPTCHA was incorrect, please retry.',
		'customtranslations' => ''
	);

	$lang['plugin']['recaptcha']['errors'] = array (
		-1	=> 'reCaptcha keys not set. Check reCaptcha settings plugin'
	);

?>
