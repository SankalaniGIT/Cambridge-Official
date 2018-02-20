<?php

class AdminController extends Controller {

	public function formLoding(&$viewParam){
		$model = new AdminForm();
		$adminDao = new AdminDaoImpl();
		$model = &$viewParam;
		$model->adminList = $adminDao->getAllAdmin();
			
	}
	public function  onSubmitAction(&$viewParam){
		$elements = FormBuilder::buildFormElements(new AdminForm());
		$admin = new Admin();
		$adminDao = new AdminDaoImpl();

		foreach ($elements as $name => $value) {
			if(isset($_POST[$name]))
			$admin->$name = $_POST[$name];
		}

		if($_POST['save'] == "Save Changes"){
				
			$old_password = $_POST["old_password"];
				
			// Check old password
			$admin_list = $adminDao->getAllAdminById_Status($admin->getId());
			if($admin_list != NULL){
				$password = $admin_list->getPassword();

				if($old_password == $password){
				//	echo "<script>alert('$password')</script>";
					
					$admin->setId($admin->getId());
					$admin->setPassword($_POST["new_password"]);
					$admin->setTime_(getCurrentDate("Y-m-d G:i:s"));
						
					$adminDao->updateAdminPassword($admin);
					
					echo "<script>alert('Password Changed Successfully...!')</script>";
					
				}else{
					
					echo "<script>alert('Please enter your current password correctly.')</script>";
				}
			}			
				
			echo "<script>window.location.href='".getPage()."?view=admin_settings'</script>";
		}
	}
}

?>