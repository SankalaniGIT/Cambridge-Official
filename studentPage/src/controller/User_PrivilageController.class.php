<?php

class User_PrivilageController extends Controller {

	public function formLoding(&$viewParam){
		$model = new User_PrivilageForm();
		$user_privilageDao = new User_PrivilageDaoImpl();
		$model = &$viewParam;
		$model->user_privilageList = $user_privilageDao->getAllUser_Privilage();

		if(isset($_REQUEST['id'])) {
			$id = $_REQUEST['id'];
			$model = $user_privilageDao->getOneUser_PrivilageById($id);
			$model->user_privilageList = $user_privilageDao->getAllUser_Privilage();
			$model->buttonValue = ButtonConstants::UPDATE;
		}
	}
	public function onSubmitAction(&$viewParam){
		$elements 	= FormBuilder::buildFormElements(new User_PrivilageForm());
		$user_privilage 	= new User_Privilage();
		$user_privilageDao = new User_PrivilageDaoImpl();

		foreach ($elements as $name => $value) {
			if(isset($_POST[$name]))
			$user_privilage->$name = $_POST[$name];
		}

		if($_POST['save'] == ButtonConstants::SAVE){
			$exit_item=$user_privilageDao->getOneUser_PrivilageById($user_privilage->getId());

			if($exit_item == null){

				$user_privilage_list = $user_privilageDao->getLastOrderNo();
				if($user_privilage_list != NULL){
					$max_order_no = $user_privilage_list->getMax_order_no();
					
					$user_privilage->setOrder_no($max_order_no+1);
				}
				
				$user_privilage->setStatus("Yes");
				$user_privilage->setDate_(date("Y-m-d G:i:s",time()));
				
				$user_privilageDao->saveUser_Privilage($user_privilage);
				
				echo "<script>alert('Saved Successfully...!')</script>";
				echo "<script>window.location.href='".getPage()."?view=user_privilage_add'</script>";
			}else{
				echo "<script>window.location.href='".getPage()."?view=user_privilage_add&error=exist'</script>";
			}

		}else if($_POST['save'] == ButtonConstants::UPDATE){
			$exit_item=$user_privilageDao->getOneUser_PrivilageById($user_privilage->getId());
			if($exit_item!= null){
				$user_privilage_Updated = $user_privilageDao->getOneUser_PrivilageById($user_privilage->getId());
				$user_privilage_Updated->setId($user_privilage->getId());
				$user_privilage_Updated->setCode($user_privilage->getCode());
				$user_privilage_Updated->setUser_id($user_privilage->getUser_id());
				$user_privilage_Updated->setPrivilage_id($user_privilage->getPrivilage_id());
				$user_privilage_Updated->setData_date($user_privilage->getData_date());
							
				$user_privilage_Updated->setStatus("Yes");
				$user_privilage_Updated->setDate_(date("Y-m-d G:i:s",time()));
				
				$user_privilageDao->updateUser_Privilage($user_privilage_Updated);

				echo "<script>alert('Updated Successfully...!')</script>";
				echo "<script>window.location.href='".getPage()."?view=user_privilage_manage'</script>";
			}else{
				echo "<script>window.location.href='".getPage()."?view=user_privilage_manage&error=exist'</script>";
			}
		}elseif($_POST['save'] == ButtonConstants::DELETE){
			$user_privilageDao->deleteUser_PrivilageById($user_privilage->getId());
			echo "<script>alert('Deleted Successfully...!')</script>";
			echo "<script>window.location.href='".getPage()."?view=user_privilage_add'</script>";
		}
	}
}
?>