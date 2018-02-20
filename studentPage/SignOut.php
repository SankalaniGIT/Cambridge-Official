<?php
	require_once('src/utility/WebConstants.class.php');
	require_once('src/platform/SessionManager.class.php');
	SessionManager::init();
	SessionManager::destroySession(SessionConstants::SYSTEM_ADMIN);
	unset($_SESSION["USER_ID"]);
	header("Location:index.php");
?>