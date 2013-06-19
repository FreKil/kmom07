<?php
/**
 * All requests routed through here. This is an overview of what actaully happens during
 * a request.
 */

// ---------------------------------------------------------------------------------------
// Botup drygia
define('DRYGIA_INSTALL_PATH', dirname(__FILE__));
define('DRYGIA_SITE_PATH', DRYGIA_INSTALL_PATH . '/site');

require(DRYGIA_INSTALL_PATH.'/src/bootstrap.php');

$drygia = CDrygia::Instance();


// ---------------------------------------------------------------------------------------
// The Front controller
$drygia->FrontControllerRoute();


// ---------------------------------------------------------------------------------------
// Render the html website.
$drygia->ThemeEngineRender();
