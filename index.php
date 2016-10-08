<?php

$moduleId = basename(dirname(__FILE__));

if (!pm_Session::getClient()->isAdmin()) {
	echo '<h1>Only administrator account can access this module!</h1>';
}
else {
	pm_Context::init($moduleId);

	//$app = new Modules_Litespeed_ControlApp();
	$app = new pm_Application();
	$app->Run();
}
