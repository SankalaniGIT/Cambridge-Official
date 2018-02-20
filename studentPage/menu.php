<?php

$admin = SessionManager::getSessionAttribute(SessionConstants::SYSTEM_STUDENT);

$userId = $_SESSION["SYSTEM_ADMIN"];

//echo "<script>alert('$admin')</script>";

if($admin !== NULL){

	$student_first_name = $admin->getFirst_name();
	?>

<div id="smoothmenu1" class="ddsmoothmenu">
<ul>
	<li><a href="admin_home.php?view=profile">Profile</a></li>
	<li><a href="admin_home.php?view=assessment">Assessments</a></li>
	<li><a href="admin_home.php?view=subjects">Subjects</a></li>

	<li style="float: left; font-weight: normal;">
	<div style="color: #FFF;">
	<div style="float: left; padding: 8px 10px;">Login as <?=$student_first_name ?></div>
	<!--
	<div
		style="float: left; border-right: 1px solid #999; padding: 3px 0px; height: 25px;"></div>
	<a href="admin_home.php?view=admin_settings"
		style="border: none; float: left;">
	<div style="float: left;">Settings</div>
	</a>
	<div
		style="float: left; border-right: 1px solid #999; padding: 3px 0px; height: 25px;"></div>

	<a href="download_db_backup.php" style="border: none; float: left;">
	<div style="float: left;">Backup Database</div>
	</a>
	-->
	<div
		style="float: left; border-right: 1px solid #999; padding: 3px 0px; height: 25px;"></div>
	<a href="SignOut.php" style="border: none; float: left;">
	<div style="float: left;">Logout</div>
	</a></div>
	</li>
	<li style="float: right; font-weight: normal;"><label id="current_date"
		class="current_date"></label></li>
</ul>
</div>

	<?php
}

?>
