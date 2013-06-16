<?php
/*
Plugin Name: GoogleSearchBox
Version: 1.2
Plugin URI: http://www.ramblingross.co.uk/fp-content/attachs/googlesearchbox-1-2.zip
Description: Extends standard SearchBox to support google
Author: RamblingRoss
Author URI: http://www.ramblingross.co.uk
*/

define('GOOGLESEARCHBOX_BIG', plugin_getoptions('googlesearchbox','bigbox'));

function plugin_googlesearchbox_setup() {
	global $fp_config;

	if (!plugin_getoptions('googlesearchbox','cx') && 
		!plugin_getoptions('googlesearchbox','destn') && 
	    !plugin_getoptions('googlesearchbox','cof') &&
	    !plugin_getoptions('googlesearchbox','ie')) {
		return -1;
	}
  
	return 1;		
}

if (class_exists('AdminPanelAction')){

	class admin_plugin_googlesearchbox extends AdminPanelAction { 
		
		var $langres = 'plugin:googlesearchbox';
		
		function setup() {
			$this->smarty->assign('admin_resource', "plugin:googlesearchbox/admin.plugin.googlesearchbox");
		}
		
		function main() {
			$googlesearchboxconf = plugin_getoptions('googlesearchbox');
      
			$this->smarty->assign('googlesearchboxchecked', array( isset($googlesearchboxconf['bigbox']) && $googlesearchboxconf['bigbox']  ? 1  : 0  ));

      $lang = lang_load('plugin:googlesearchbox');
      
			$this->smarty->assign('googlesearchboxcheckedstype_radios', array('titles' => $lang['admin']['plugin']['googlesearchbox']['searchTypeTitle'],
                                                                        'full' => $lang['admin']['plugin']['googlesearchbox']['searchTypeFull'],
                                                                        'google' => $lang['admin']['plugin']['googlesearchbox']['searchTypeGoogle']));

      $this->smarty->assign('googlesearchboxcheckedstype', isset($googlesearchboxconf['stype']) ? $googlesearchboxconf['stype'] : "full"); 
      
			$googlesearchboxconf['cx'] = isset($googlesearchboxconf['cx']) ? $googlesearchboxconf['cx'] : "";      
			$googlesearchboxconf['destn'] = isset($googlesearchboxconf['destn']) ? $googlesearchboxconf['destn'] : "";      
			$googlesearchboxconf['cof'] = isset($googlesearchboxconf['cof']) ? $googlesearchboxconf['cof'] : "";
			$googlesearchboxconf['ie'] = isset($googlesearchboxconf['ie']) ? $googlesearchboxconf['ie'] : "";
            
			$this->smarty->assign('googlesearchboxconf', $googlesearchboxconf);
		}
		
		function onsubmit() {
			global $fp_config;
			
			if ($_POST['googlesearchbox-conf']){
				
				plugin_addoption('googlesearchbox', 'bigbox', isset($_POST['googlesearchbox-bigbox']));
				plugin_addoption('googlesearchbox', 'stype', $_POST['googlesearchbox-searchtyperadio']);
				plugin_addoption('googlesearchbox', 'cx', $_POST['googlesearchbox-cx']);
				plugin_addoption('googlesearchbox', 'destn', $_POST['googlesearchbox-destn']);
				plugin_addoption('googlesearchbox', 'cof', $_POST['googlesearchbox-cof']);
				plugin_addoption('googlesearchbox', 'ie', $_POST['googlesearchbox-ie']);
				plugin_saveoptions('googlesearchbox');
				
				$this->smarty->assign('success', 1);
			} else {
			 	$this->smarty->assign('success', -1);
			}
			
			return 2;
		}		
	}

	admin_addpanelaction('plugin', 'googlesearchbox', true);

}

function plugin_googlesearchbox_widget() {
	global $lang;
	
	$url = BLOG_BASEURL . 'search.php';
	
	$destn = BLOG_BASEURL . plugin_getoptions('googlesearchbox','destn');
	
	$content = 		'<ul><li>
	
		<script type="text/javascript">
		
			function googleize()
			{
				if (document.getElementsByName("searchForm")[0].action == \'';
				$content .= $destn;				
				$content .= '\')
				{
					var arr = new Array();        
					arr = document.getElementsByName("stype"); 
					while (arr.length > 0)
					{
						var inputObj = arr[arr.length-1];
						if ( inputObj.parentNode && inputObj.parentNode.removeChild )
							inputObj.parentNode.removeChild(inputObj);       
					}

					var form = document.getElementById("cse-search-box");

					var cxElement = document.createElement("input");
					cxElement.setAttribute("type", "hidden");
					cxElement.setAttribute("name", "cx");
					cxElement.setAttribute("value", "';          
					$content .=	plugin_getoptions('googlesearchbox','cx');          
					$content .='");
					form.appendChild(cxElement);
					        
					var cofElement = document.createElement("input");
					cofElement.setAttribute("type", "hidden");
					cofElement.setAttribute("name", "cof");
					cofElement.setAttribute("value", "';          
					$content .=	plugin_getoptions('googlesearchbox','cof');
					$content .=	'");
					form.appendChild(cofElement);
					        
					var ieElement = document.createElement("input");
					ieElement.setAttribute("type", "hidden");
					ieElement.setAttribute("name", "ie");
					ieElement.setAttribute("value", "';          
					$content .=	plugin_getoptions('googlesearchbox','ie');
					$content .=	'");

					form.appendChild(ieElement);
				}
			}
		
		</script>
		
		<form name="searchForm" method="get" id="cse-search-box" action="';    
    if (plugin_getoptions('googlesearchbox','stype') == 'google') 
      $content .= $destn; 
    else 
      $content .= $url;     
    $content .= '"><input type="hidden" name="stype" value="';
    $content .= plugin_getoptions('googlesearchbox','stype');   
    $content .= '" />';
	
		$content .= '<p><input type="text" name="q" /></p>';
		
		if (GOOGLESEARCHBOX_BIG) {
				$content .=				
				'<p><label><input type="radio" name="stype" value="titles"';        
        if (plugin_getoptions('googlesearchbox','stype') == 'titles')
          $content .=	' checked="checked"';              
        $content .=' onclick="javascript: searchForm.action=\''.$url.'\';" />'.$lang['search']['onlytitles'].'</label></br>'.        
				'<label><input type="radio" name="stype" value="full"';
        if (plugin_getoptions('googlesearchbox','stype') == 'full')
          $content .=	' checked="checked"';                      
        $content .=' onclick="javascript: searchForm.action=\''.$url.'\';" />'.$lang['search']['fulltext'].'</label></br>'.
				'<label id="googleSearch" style="display:none;"><input type="radio" name="stype" value="google"';
        if (plugin_getoptions('googlesearchbox','stype') == 'google')
          $content .=	' checked="checked"';                              
        $content .=' onclick="javascript: searchForm.action=\'';				
				$content .= $destn;				
				$content .= '\';" />'.$lang['plugin']['googlesearchbox']['web'].'</label></p>'.				
				'<script>if (typeof(cPrompt) == "undefined"  || cPrompt.checkCookie() == 1 || cPrompt.checkCookie() == 2) {document.getElementById("googleSearch").style.display="inline";}</script>';	
		}
		
		if (GOOGLESEARCHBOX_BIG)
			$content .= "<p><a href=\"{$url}\">{$lang['search']['moreopts']}</a></p>";
		
		$content.=	'<p><input name="sa" type="submit" onclick="javascript: googleize();" value="'.
						$lang['search']['submit']. '" /> </p>		
												
		</form>
		</li></ul>';

	
	return array(
		'subject'	=>	$lang['search']['head'],
		'content'	=>	$content		
		);
}

register_widget('googlesearchbox', 'GoogleSearchBox', 'plugin_googlesearchbox_widget');

?>