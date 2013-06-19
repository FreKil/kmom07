<?php

//-------------------------------------------------------------------------------------
// Print debuginformation from the framework.
function get_debug() {
	$drygia = CDrygia::Instance();  
	if(empty($drygia->config['debug'])) {
		return;
	}
  
	// Get the debug output
	$html = null;
	if(isset($drygia->config['debug']['db-num-queries']) && $drygia->config['debug']['db-num-queries'] && isset($drygia->db)) {
		$flash = $drygia->session->GetFlash('database_numQueries');
		$flash = $flash ? "$flash + " : null;
		$html .= "<p>Database made $flash" . $drygia->db->GetNumQueries() . " queries.</p>";
	}    
	if(isset($drygia->config['debug']['db-queries']) && $drygia->config['debug']['db-queries'] && isset($drygia->db)) {
		$flash = $drygia->session->GetFlash('database_queries');
		$queries = $drygia->db->GetQueries();
		if($flash) {
			$queries = array_merge($flash, $queries);
		}
		$html .= "<p>Database made the following queries.</p><pre>" . implode('<br/><br/>', $queries) . "</pre>";
	}    
	if(isset($drygia->config['debug']['timer']) && $drygia->config['debug']['timer']) {
		$html .= "<p>Page was loaded in " . round(microtime(true) - $drygia->timer['first'], 5)*1000 . " msecs.</p>";
	}    
	if(isset($drygia->config['debug']['lydia']) && $drygia->config['debug']['lydia']) {
		$html .= "<hr><h3>Debuginformation</h3><p>The content of CDrygia:</p><pre>" . htmlent(print_r($drygia, true)) . "</pre>";
	}    
	if(isset($drygia->config['debug']['session']) && $drygia->config['debug']['session']) {
		$html .= "<hr><h3>SESSION</h3><p>The content of CLydia->session:</p><pre>" . htmlent(print_r($drygia->session, true)) . "</pre>";
		$html .= "<p>The content of \$_SESSION:</p><pre>" . htmlent(print_r($_SESSION, true)) . "</pre>";
	}    
	return $html;
}


//-------------------------------------------------------------------------------------
// Get messages stored in flash-session.
function get_messages_from_session() {
	$messages = CDrygia::Instance()->session->GetMessages();
	$html = null;
	if(!empty($messages)) {
		foreach($messages as $val) {
			$valid = array('info', 'notice', 'success', 'warning', 'error', 'alert');
			$class = (in_array($val['type'], $valid)) ? $val['type'] : 'info';
			$html .= "<div class='$class'>{$val['message']}</div>\n";
		}
	}
	return $html;
}


//-------------------------------------------------------------------------------------
// Login menu. Creates a menu which reflects if user is logged in or not.
function login_menu() {
	$drygia = CDrygia::Instance();
	if($drygia->user['isAuthenticated']) {
		$items = "<a href='" . create_url('user/profile') . "'><img class='gravatar' src='" . get_gravatar(20) . "' alt=''> " . $drygia->user['acronym'] . "</a> ";
		if($drygia->user['hasRoleAdministrator']) {
			$items .= "<a href='" . create_url('acp') . "'>acp</a> ";
		}
		$items .= "<a href='" . create_url('user/logout') . "'>logout</a> ";
	} 
	else {
		$items = "<a href='" . create_url('user/login') . "'>login</a> ";
	}
	return "<nav id='login-menu'>$items</nav>";
}


//-------------------------------------------------------------------------------------
// Get a gravatar based on the user's email.
function get_gravatar($size=null) {
	return 'http://www.gravatar.com/avatar/' . md5(strtolower(trim(CDrygia::Instance()->user['email']))) . '.jpg?r=pg&amp;d=wavatar&amp;' . ($size ? "s=$size" : null);
}


//-------------------------------------------------------------------------------------
// Prepend the base_url.
function base_url($url=null) {
	return CDrygia::Instance()->request->base_url . trim($url, '/');
}


//-------------------------------------------------------------------------------------
// Escape data to make it safe to write in the browser.
function esc($str) {
	return htmlEnt($str);
}

//-------------------------------------------------------------------------------------
// Create a url to an internal resource.
//
// @param string the whole url or the controller. Leave empty for current controller.
// @param string the method when specifying controller as first argument, else leave empty.
// @param string the extra arguments to the method, leave empty if not using method.
function create_url($urlOrController=null, $method=null, $arguments=null) {
	return CDrygia::Instance()->request->CreateUrl($urlOrController, $method, $arguments);
}


//-------------------------------------------------------------------------------------
// Prepend the theme_url, which is the url to the current theme directory.
function theme_url($url) {
	return create_url(CDrygia::Instance()->themeUrl . "/{$url}");
}


//-------------------------------------------------------------------------------------
//Prepend the theme_parent_url, which is the url to the parent theme directory.
// 
//@param $url string the url-part to prepend.
//@returns string the absolute url.
function theme_parent_url($url) {
	return create_url(CDrygia::Instance()->themeParentUrl . "/{$url}");
}
//-------------------------------------------------------------------------------------
// Return the current url.
function current_url() {
	return CDrygia::Instance()->request->current_url;
}


//-------------------------------------------------------------------------------------
// Render all views.
function render_views($region='default') {
	return CDrygia::Instance()->views->Render($region);
}


//-------------------------------------------------------------------------------------
// Check if region has views. Accepts variable amount of arguments as regions.
//
// @param $region string the region to draw the content in.
function region_has_content($region='default' /*...*/) {
	return CDrygia::Instance()->views->RegionHasView(func_get_args());
}


//-------------------------------------------------------------------------------------
// Filter data according to a filter. Uses CMContent::Filter()
//
// @param $data string the data-string to filter.
// @param $filter string the filter to use.
// @returns string the filtered string.
function filter_data($data, $filter) {
	return CTextFilter::Filter($data, $filter);
}


