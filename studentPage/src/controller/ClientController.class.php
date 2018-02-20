<?php

class ClientController extends Controller {

	public function formLoding(&$viewParam){
		$model = new ClientForm();
		$clientDao = new ClientDaoImpl();
		$model = &$viewParam;
		$model->clientList = $clientDao->getAllClient();

		if(isset($_REQUEST['id'])) {
			$id = $_REQUEST['id'];
			$model = $clientDao->getOneClientById($id);
			$model->clientList = $clientDao->getAllClient();
			$model->buttonValue = ButtonConstants::UPDATE;
		}
	}
	public function onSubmitAction(&$viewParam){
		$elements 	= FormBuilder::buildFormElements(new ClientForm());
		$client 	= new Client();
		$clientDao = new ClientDaoImpl();

		foreach ($elements as $name => $value) {
			if(isset($_POST[$name]))
			$client->$name = $_POST[$name];
		}

		if($_POST['save'] == ButtonConstants::SAVE){
			$exit_item=$clientDao->getOneClientById($client->getId());

			if($exit_item == null){

				$client_list = $clientDao->getLastOrderNo();
				if($client_list != NULL){
					$max_order_no = $client_list->getMax_order_no();
						
					$client->setOrder_no($max_order_no+1);
				}

				$client->setStatus("Yes");
				$client->setDate_(date("Y-m-d G:i:s",time()));

				$clientDao->saveClient($client);

				echo "<script>alert('Saved Successfully...!')</script>";
				echo "<script>window.location.href='".getPage()."?view=client_add'</script>";
			}else{
				echo "<script>window.location.href='".getPage()."?view=client_add&error=exist'</script>";
			}

		}else if($_POST['save'] == ButtonConstants::UPDATE){
			$exit_item=$clientDao->getOneClientById($client->getId());
			if($exit_item!= null){
				$client_Updated = $clientDao->getOneClientById($client->getId());
				$client_Updated->setId($client->getId());
				$client_Updated->setUser_id($client->getUser_id());
				$client_Updated->setCode($client->getCode());
				$client_Updated->setData_date($client->getData_date());
				$client_Updated->setNic_no($client->getNic_no());
				$client_Updated->setName($client->getName());
				$client_Updated->setCompany($client->getCompany());
				$client_Updated->setAddress($client->getAddress());
				$client_Updated->setStreet($client->getStreet());
				$client_Updated->setCity($client->getCity());
				$client_Updated->setZip($client->getZip());
				$client_Updated->setCountry($client->getCountry());
				$client_Updated->setTele_no($client->getTele_no());
				$client_Updated->setMobile_no($client->getMobile_no());
				$client_Updated->setFax_no($client->getFax_no());
				$client_Updated->setEmail($client->getEmail());
				$client_Updated->setWeb($client->getWeb());
				$client_Updated->setSpecialization($client->getSpecialization());
					
				$client_Updated->setStatus("Yes");
				$client_Updated->setDate_(date("Y-m-d G:i:s",time()));

				$clientDao->updateClient($client_Updated);

				echo "<script>alert('Updated Successfully...!')</script>";
				echo "<script>window.location.href='".getPage()."?view=client_manage'</script>";
			}else{
				echo "<script>window.location.href='".getPage()."?view=client_manage&error=exist'</script>";
			}
		}elseif($_POST['save'] == ButtonConstants::DELETE){
			$clientDao->deleteClientById($client->getId());
			echo "<script>alert('Deleted Successfully...!')</script>";
			echo "<script>window.location.href='".getPage()."?view=client_add'</script>";
		}
	}
}
?>