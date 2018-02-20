<?php
/**
 *  This is auto generated by PHP5 Tools based on the Database Schema.
 *  Author : MahiShimi PHP5 Tools version 1.1
 *  Project : Cambridge
 *  Last Updated : Fri 08th Feb,2013 05:00 am
 *  Table Name : exam_groups
 *  Modifier : This Db tool is currently modified by Maheshwaran Varghese on 10th August 2011
 */

class Exam_Groups
{
	public $id;
	public $name;
	public $batch_id;
	public $exam_type;
	public $is_published;
	public $result_published;
	public $exam_date;
	public $max_order_no;

	//===int(11)===//
	public function getId(){return $this->id;}
	public function setId($id){$this->id= $id;}

	//===varchar(255)===//
	public function getName(){return $this->name;}
	public function setName($name){$this->name= $name;}

	//===int(11)===//
	public function getBatch_id(){return $this->batch_id;}
	public function setBatch_id($batch_id){$this->batch_id= $batch_id;}

	//===varchar(255)===//
	public function getExam_type(){return $this->exam_type;}
	public function setExam_type($exam_type){$this->exam_type= $exam_type;}

	//===tinyint(1)===//
	public function getIs_published(){return $this->is_published;}
	public function setIs_published($is_published){$this->is_published= $is_published;}

	//===tinyint(1)===//
	public function getResult_published(){return $this->result_published;}
	public function setResult_published($result_published){$this->result_published= $result_published;}

	//===date===//
	public function getExam_date(){return $this->exam_date;}
	public function setExam_date($exam_date){$this->exam_date= $exam_date;}

	//=== max_order_no ===//
	public function getMax_order_no(){return $this->max_order_no;}
	public function setMax_order_no($max_order_no){$this->max_order_no= $max_order_no;}

}


// Implement class of Exam_Groups
class Exam_GroupsDaoImpl
{
	private $db = null ;

	function __construct() {
		$this->db=new DBConnection();
	}

	/** SAVE THE Exam_Groups OBJECT INTO exam_groups */
	function saveExam_Groups($exam_groups) {
		$exam_groupsIn=new Exam_Groups();
		$exam_groupsIn=$exam_groups;

		$SQL= sprintf("INSERT INTO exam_groups(name,batch_id,exam_type,is_published,result_published,exam_date) VALUES('%s',%d,'%s',%d,%d,'%s')",
		mysql_real_escape_string($exam_groupsIn->getName()),mysql_real_escape_string($exam_groupsIn->getBatch_id()),mysql_real_escape_string($exam_groupsIn->getExam_type()),mysql_real_escape_string($exam_groupsIn->getIs_published()),mysql_real_escape_string($exam_groupsIn->getResult_published()),mysql_real_escape_string($exam_groupsIn->getExam_date()));

		$this->db->executeQuery($SQL);

	}


	/** UPDATE THE TABLE exam_groups */
	function updateExam_Groups($exam_groups) {
		$exam_groupsIn=new Exam_Groups();
		$exam_groupsIn=$exam_groups;

		$SQL= sprintf("UPDATE exam_groups SET name='%s',batch_id=%d,exam_type='%s',is_published=%d,result_published=%d,exam_date='%s' WHERE id=%d ",
		mysql_real_escape_string($exam_groupsIn->getName()),mysql_real_escape_string($exam_groupsIn->getBatch_id()),mysql_real_escape_string($exam_groupsIn->getExam_type()),mysql_real_escape_string($exam_groupsIn->getIs_published()),mysql_real_escape_string($exam_groupsIn->getResult_published()),mysql_real_escape_string($exam_groupsIn->getExam_date()),$exam_groupsIn->getId());

		$this->db->executeQuery($SQL);

	}

	/** GET ALL DATA FROM THE TABLE exam_groups */
	function getAllExam_Groups() {
		$SQL="SELECT * FROM exam_groups";
		$this->db->executeQuery($SQL);

		$result = array();
		$count = 0;

		while($rs = $this->db->nextRecord())
		{
			$exam_groups = new Exam_Groups();
			$exam_groups->setId($rs['id']);
			$exam_groups->setName($rs['name']);
			$exam_groups->setBatch_id($rs['batch_id']);
			$exam_groups->setExam_type($rs['exam_type']);
			$exam_groups->setIs_published($rs['is_published']);
			$exam_groups->setResult_published($rs['result_published']);
			$exam_groups->setExam_date($rs['exam_date']);
			$result[$count++] = $exam_groups;
		}

		$this->db->closeRs();
		return $result;

	}

	/** GET ALL DATA BY STATUS FROM THE TABLE exam_groups */
	function getAllExam_GroupsByStatus() {
		$SQL="SELECT * FROM exam_groups WHERE status = 'Yes'";
		$this->db->executeQuery($SQL);

		$result = array();
		$count = 0;

		while($rs = $this->db->nextRecord())
		{
			$exam_groups = new Exam_Groups();
			$exam_groups->setId($rs['id']);
			$exam_groups->setName($rs['name']);
			$exam_groups->setBatch_id($rs['batch_id']);
			$exam_groups->setExam_type($rs['exam_type']);
			$exam_groups->setIs_published($rs['is_published']);
			$exam_groups->setResult_published($rs['result_published']);
			$exam_groups->setExam_date($rs['exam_date']);
			$result[$count++] = $exam_groups;
		}

		$this->db->closeRs();
		return $result;

	}

	/** GET ALL DATA BY ID DESC FROM THE TABLE exam_groups */
	function getAllExam_GroupsByIdDesc() {
		$SQL="SELECT * FROM exam_groups ORDER BY id DESC";
		$this->db->executeQuery($SQL);

		$result = array();
		$count = 0;

		while($rs = $this->db->nextRecord())
		{
			$exam_groups = new Exam_Groups();
			$exam_groups->setId($rs['id']);
			$exam_groups->setName($rs['name']);
			$exam_groups->setBatch_id($rs['batch_id']);
			$exam_groups->setExam_type($rs['exam_type']);
			$exam_groups->setIs_published($rs['is_published']);
			$exam_groups->setResult_published($rs['result_published']);
			$exam_groups->setExam_date($rs['exam_date']);
			$result[$count++] = $exam_groups;
		}

		$this->db->closeRs();
		return $result;

	}

	/** GET ONE DATA BY ID FROM THE TABLE exam_groups */
	function getOneExam_GroupsById($id) {
		$SQL="SELECT * FROM exam_groups WHERE id = '$id'";
		$this->db->executeQuery($SQL);

		$result = array();
		$count = 0;

		while($rs = $this->db->nextRecord())
		{
			$exam_groups = new Exam_Groups();
			$exam_groups->setId($rs['id']);
			$exam_groups->setName($rs['name']);
			$exam_groups->setBatch_id($rs['batch_id']);
			$exam_groups->setExam_type($rs['exam_type']);
			$exam_groups->setIs_published($rs['is_published']);
			$exam_groups->setResult_published($rs['result_published']);
			$exam_groups->setExam_date($rs['exam_date']);
			$result[$count++] = $exam_groups;
		}

		$this->db->closeRs();
		if(count($result) > 0 ){
			return $result[0];
		}else{
			return null;
		}
	}

	/** GET DATA BY ID, STATUS FROM THE TABLE exam_groups */
	function getAllExam_GroupsById_Status($id) {
		$SQL="SELECT * FROM exam_groups WHERE id = '$id' AND status = 'Yes'";
		$this->db->executeQuery($SQL);

		$result = array();
		$count = 0;

		while($rs = $this->db->nextRecord())
		{
			$exam_groups = new Exam_Groups();
			$exam_groups->setId($rs['id']);
			$exam_groups->setName($rs['name']);
			$exam_groups->setBatch_id($rs['batch_id']);
			$exam_groups->setExam_type($rs['exam_type']);
			$exam_groups->setIs_published($rs['is_published']);
			$exam_groups->setResult_published($rs['result_published']);
			$exam_groups->setExam_date($rs['exam_date']);
			$result[$count++] = $exam_groups;
		}

		$this->db->closeRs();
		if(count($result) > 0 ){
			return $result[0];
		}else{
			return null;
		}
	}

	/** GET LAST RECORD FROM THE TABLE exam_groups */
	function getLastRec($field) {
		$SQL="SELECT * FROM exam_groups ORDER BY $field DESC LIMIT 1";
		$this->db->executeQuery($SQL);

		$result = array();
		$count = 0;

		while($rs = $this->db->nextRecord())
		{
			$exam_groups = new Exam_Groups();
			$exam_groups->setId($rs['id']);
			$exam_groups->setName($rs['name']);
			$exam_groups->setBatch_id($rs['batch_id']);
			$exam_groups->setExam_type($rs['exam_type']);
			$exam_groups->setIs_published($rs['is_published']);
			$exam_groups->setResult_published($rs['result_published']);
			$exam_groups->setExam_date($rs['exam_date']);
			$result[$count++] = $exam_groups;
		}

		$this->db->closeRs();
		if(count($result) > 0 ){
			return $result[0];
		}else{
			return null;
		}
	}

	/** GET DATA ORDER BY ORDER_NO, STATUS FROM THE TABLE exam_groups */
	function getAllExam_Groups_By_Status_ORDER_BY_Order_no() {
		$SQL="SELECT * FROM exam_groups WHERE status = 'Yes' ORDER BY CAST(order_no AS DECIMAL)";
		$this->db->executeQuery($SQL);

		$result = array();
		$count = 0;

		while($rs = $this->db->nextRecord())
		{
			$exam_groups = new Exam_Groups();
			$exam_groups->setId($rs['id']);
			$exam_groups->setName($rs['name']);
			$exam_groups->setBatch_id($rs['batch_id']);
			$exam_groups->setExam_type($rs['exam_type']);
			$exam_groups->setIs_published($rs['is_published']);
			$exam_groups->setResult_published($rs['result_published']);
			$exam_groups->setExam_date($rs['exam_date']);
			$result[$count++] = $exam_groups;
		}

		$this->db->closeRs();
		return $result;

	}

	/** GET DATA BY ID, STATUS ORDER BY ORDER_NO FROM THE TABLE exam_groups */
	function getExam_Groups_By_Id_Status_ORDER_BY_Order_no() {
		$SQL="SELECT * FROM exam_groups WHERE id = '$id' AND status = 'Yes' ORDER BY CAST(order_no AS DECIMAL)";
		$this->db->executeQuery($SQL);

		$result = array();
		$count = 0;

		while($rs = $this->db->nextRecord())
		{
			$exam_groups = new Exam_Groups();
			$exam_groups->setId($rs['id']);
			$exam_groups->setName($rs['name']);
			$exam_groups->setBatch_id($rs['batch_id']);
			$exam_groups->setExam_type($rs['exam_type']);
			$exam_groups->setIs_published($rs['is_published']);
			$exam_groups->setResult_published($rs['result_published']);
			$exam_groups->setExam_date($rs['exam_date']);
			$result[$count++] = $exam_groups;
		}

		$this->db->closeRs();
		if(count($result) > 0 ){
			return $result[0];
		}else{
			return null;
		}
	}

	/** GET DATA MAXIMUM ORDER NO FROM THE TABLE exam_groups */
	function getLastOrderNo() {
		$SQL="SELECT MAX(CAST(order_no AS DECIMAL)) AS max_order_no FROM exam_groups";
		$this->db->executeQuery($SQL);

		$result = array();
		$count = 0;

		while($rs = $this->db->nextRecord())
		{
			$exam_groups = new Exam_Groups();
			$exam_groups->setId($rs['id']);
			$exam_groups->setName($rs['name']);
			$exam_groups->setBatch_id($rs['batch_id']);
			$exam_groups->setExam_type($rs['exam_type']);
			$exam_groups->setIs_published($rs['is_published']);
			$exam_groups->setResult_published($rs['result_published']);
			$exam_groups->setExam_date($rs['exam_date']);
			$exam_groups->setMax_order_no($rs['max_order_no']);
			$result[$count++] = $exam_groups;
		}

		$this->db->closeRs();
		if(count($result) > 0 ){
			return $result[0];
		}else{
			return null;
		}
	}

	/** DELETE VALUE BY ID FROM THE TABLE exam_groups */
	function deleteExam_GroupsById($id) {
		$SQL="DELETE FROM exam_groups WHERE id='$id'";
		$this->db->executeQuery($SQL);

	}
	function __destruct() {
		$this->db->close();
	}

}
?>