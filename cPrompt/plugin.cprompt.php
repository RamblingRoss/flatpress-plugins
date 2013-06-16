<?php
/*
Plugin Name: cPrompt
Version: 1.0
Plugin URI: http://www.ramblingross.co.uk/fp-content/attachs/googlesearchbox-1-2.zip
Description: Wrappers <a href="http://michaelwright.me/cPrompt/" title="cPrompt">cPrompt</a> into a FlatPress plugin
Author: RamblingRoss
Author URI: http://www.ramblingross.co.uk
*/

add_action('wp_head', 'plugin_cprompt_head', 0);

function plugin_cprompt_head() {

  $pdir=plugin_geturl('cprompt');
	echo <<<CPROMPT
	<!-- start of cPrompt -->
	<script type="text/javascript" src="{$pdir}res/cprompt.min.js"></script>
	<!-- end of cPrompt -->
CPROMPT;
}

?>
