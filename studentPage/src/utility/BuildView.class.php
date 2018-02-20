<?php
class BuildView {
	public static function setView() {

		if(isset($_REQUEST['view'])){
			/* ########## System Student ############# */


			if($_REQUEST['view'] == 'profile'){
				include('Profile.php');
			}else if($_REQUEST['view'] == 'assessment'){
				include('Assessment.php');
			}else if($_REQUEST['view'] == 'subjects'){
				include('Subjects.php');
			}

			//
			else if($_REQUEST['view'] == 'admin_settings'){
				include('Admin_Settting.php');
			}

		}else{
			self::setPageView();
		}
	}


	public static function setPageView(){

		echo "<table width='100%' height='400' border='0' cellpadding='1' cellspacing='0'>
  <tr>
		<td width='100%'>&nbsp;</td>
		</tr>
		</table>";
	}

	public static function setUnder_ConstructionPage(){
		include('underconstruction.php');
	}



}



?>
