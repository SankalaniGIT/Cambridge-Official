<?php

SessionManager::init();
$admin=new Admin();
$admin = SessionManager::getSessionAttribute(SessionConstants::SYSTEM_ADMIN);
if($admin == NULL){
	echo "<script>window.location.href='index.php'</script>";
}

$dates = date("Y-m-d G:i:s", time());

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/admin_style.css" rel="stylesheet" type="text/css">
</head>

<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0"
	class="form_page_tab">
	<tr>
		<th class="error_heading">Error</th>
	</tr>
	<tr>
		<td>
		<table width="100%" border="0" cellspacing="0" cellpadding="0"
			class="form_tab error_msg">
			<tr>
				<td><?
				$error_type = $_REQUEST["error_type"];
				
				if($error_type == 'save_failed'){
					echo 'Record does not saved successfully !';
				}
				else if($error_type == 'update_failed'){
					echo 'Record does not updated successfully !';
				}
				else{
					echo 'Unexpected error !';
				}
				?></td>
			</tr>
		</table>
		</td>
	</tr>
</table>

</body>
</html>
