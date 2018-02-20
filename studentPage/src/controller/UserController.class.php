<?php

class UserController extends Controller {

	public function formLoding(&$viewParam){
		$model = new UserForm();
		$userDao = new UserDaoImpl();
		$model = &$viewParam;
		$model->userList = $userDao->getAllUser();

		if(isset($_REQUEST['id'])) {
			$id = $_REQUEST['id'];
			$model = $userDao->getOneUserById($id);
			$model->userList = $userDao->getAllUser();
			$model->buttonValue = ButtonConstants::UPDATE;
		}
	}
	public function onSubmitAction(&$viewParam){
		$elements 	= FormBuilder::buildFormElements(new UserForm());
		$user 	= new User();
		$userDao = new UserDaoImpl();

		foreach ($elements as $name => $value) {
			if(isset($_POST[$name]))
			$user->$name = $_POST[$name];
		}

		if($_POST['save'] == ButtonConstants::SAVE){
			$exit_item=$userDao->getOneUserById($user->getId());

			if($exit_item == null){

				$user_list = $userDao->getLastOrderNo();
				if($user_list != NULL){
					$max_order_no = $user_list->getMax_order_no();

					$user->setOrder_no($max_order_no+1);
				}

				$user->setStatus("Yes");
				$user->setDate_(date("Y-m-d G:i:s",time()));

				$insert_id = $userDao->saveUser($user);

				// SAVE INTO user_privilage_tab
				$user_privilage = new User_Privilage();
				$user_privilageDao = new User_PrivilageDaoImpl();

				$no_of_prv = $_POST["no_of_prv"];
				$c = 0;

				for($s=0;$s<$no_of_prv;$s++){

					$chk_prv = $_POST["chk_prv".$s];

					if($chk_prv != ""){

						$rdb_edit = $_POST["rdb_edit".$s];
						$rdb_delete = $_POST["rdb_delete".$s];

						//	echo "<script>alert('$rdb_edit')</script>";

						$user_privilage->setUser_id($insert_id);
						$user_privilage->setPrivilage_id($chk_prv);
						$user_privilage->setCode("");
						$user_privilage->setIs_view("Yes");
						$user_privilage->setIs_save("Yes");
						$user_privilage->setIs_edit($rdb_edit);
						$user_privilage->setIs_delete($rdb_delete);
						$user_privilage->setData_date(date("Y-m-d",time()));
						$user_privilage->setStatus("Yes");
						$user_privilage->setDate_(date("Y-m-d G:i:s", time()));

						$user_privilageDao->saveUser_Privilage($user_privilage);

						$c++;
					}
				}


				echo "<script>alert('Saved Successfully...!')</script>";
				echo "<script>window.location.href='".getPage()."?view=user_add'</script>";
			}else{
				echo "<script>window.location.href='".getPage()."?view=user_add&error=exist'</script>";
			}

		}else if($_POST['save'] == ButtonConstants::UPDATE){
			$exit_item=$userDao->getOneUserById($user->getId());
			if($exit_item!= null){
				$user_Updated = $userDao->getOneUserById($user->getId());
				$user_Updated->setId($user->getId());
				$user_Updated->setCode($user->getCode());
				$user_Updated->setUsername($user->getUsername());
				$user_Updated->setPassword($user->getPassword());
				$user_Updated->setData_date($user->getData_date());
					
				$user_Updated->setStatus("Yes");
				$user_Updated->setDate_(date("Y-m-d G:i:s",time()));

				$userDao->updateUser($user_Updated);

				// SAVE / UPDATE INTO user_privilage_tab
				$user_privilage = new User_Privilage();
				$user_privilageDao = new User_PrivilageDaoImpl();

				$selected_list = $_POST["selected_list"];

				$split_selected_list = split(",",$selected_list);

				$user_id = $user->getId();

				$all_user_privilage_list = $user_privilageDao->getAllUser_Privilage_By_User_id($user_id);
				if($all_user_privilage_list != NULL){
					for($r=0;$r<count($all_user_privilage_list);$r++){
						$all_user_privilage_Arr = $all_user_privilage_list[$r];
						$all_user_privilage_id = $all_user_privilage_Arr->getId();

						$user_privilageDao->deleteUser_PrivilageById($all_user_privilage_id);
					}
				}

				$no_of_prv = $_POST["no_of_prv"];
				$c = 0;

				for($s=0;$s<$no_of_prv;$s++){

					$chk_prv = $_POST["chk_prv".$s];

					if($chk_prv != ""){

						$rdb_edit = $_POST["rdb_edit".$s];
						$rdb_delete = $_POST["rdb_delete".$s];

						$user_privilage->setUser_id($user_id);
						$user_privilage->setPrivilage_id($chk_prv);
						$user_privilage->setCode("");
						$user_privilage->setIs_view("Yes");
						$user_privilage->setIs_save("Yes");
						$user_privilage->setIs_edit($rdb_edit);
						$user_privilage->setIs_delete($rdb_delete);
						$user_privilage->setData_date(date("Y-m-d",time()));
						$user_privilage->setStatus("Yes");
						$user_privilage->setDate_(date("Y-m-d G:i:s", time()));

						$user_privilageDao->saveUser_Privilage($user_privilage);

						$c++;
					}
				}

				echo "<script>alert('Updated Successfully...!')</script>";
				echo "<script>window.location.href='".getPage()."?view=user_manage'</script>";
			}else{
				echo "<script>window.location.href='".getPage()."?view=user_manage&error=exist'</script>";
			}
		}elseif($_POST['save'] == ButtonConstants::DELETE){
			$userDao->deleteUserById($user->getId());

			$user_id = $user->getId();

			$user_privilage = new User_Privilage();
			$user_privilageDao = new User_PrivilageDaoImpl();

			$all_user_privilage_list = $user_privilageDao->getAllUser_Privilage_By_User_id($user_id);
			if($all_user_privilage_list != NULL){
				for($r=0;$r<count($all_user_privilage_list);$r++){
					$all_user_privilage_Arr = $all_user_privilage_list[$r];
					$all_user_privilage_id = $all_user_privilage_Arr->getId();

					$user_privilageDao->deleteUser_PrivilageById($all_user_privilage_id);
				}
			}

			echo "<script>alert('Deleted Successfully...!')</script>";
			echo "<script>window.location.href='".getPage()."?view=user_add'</script>";
		}
	}
}
?>