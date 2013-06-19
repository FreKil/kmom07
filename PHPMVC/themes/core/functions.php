<?php
/**
 * Helpers for the template file.
 */

/**
 * Add static entries for use in the template file. 
 */
 
//Creates the navbar links
$drygia->data['navmenu'] = "";
foreach($drygia->config['controllers'] as $key => $value){
	$drygia->data['navmenu'] .= " <a href='" . create_url($key) . "'>$key</a> ";
}

$drygia->data['header'] = 'Drygia';

$drygia->data['footer'] = <<<EOD
<p>Drygia</p>

<p>Källkoden finns på github:<br />
<a href="https://github.com/FreKil/Kmom05.git">https://github.com/FreKil/Kmom05.git</a>
</p>

EOD;

