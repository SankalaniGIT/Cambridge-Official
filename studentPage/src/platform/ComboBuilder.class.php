<?php
class ComboBuilder {
	private $class;
	private $name;
	private $id;
	private $value;
	private $values = array();
	private $jsOnChangeFunction;
	private $enabled = true;



	public function setEnabled($value){$this->enabled = $value;}

	public function getValue (){return $this->value;}
	public function setValue($value){$this->value = $value;}
	public function addJsOnChangeFunction($value){$this->jsOnChangeFunction = $value;}

	public function getValues (){return $this->values;}
	public function setValues($values){$this->values = $values;}

	public function getClass (){return $this->class;}
	public function getName(){return $this->name;}
	public function setName($name) {$this->name = $name;}
	public function setClass($class) {$this->class = $class;}
	public function getId(){return $this->id;}
	public function setId($id) {$this->id = $id;}

	public function ComboBuilder($name,$id='',$class='') {
		self::setName($name);
		self::setId($id);
		self::setClass($class);
	}

	public function buildCombo($daoObj,$callBackFunctionName,$param,$object,$attributeArray) {
		if($param == null)
		$list =  call_user_func(array($daoObj, $callBackFunctionName));
		else
		$list =  call_user_func(array($daoObj, $callBackFunctionName),$param);

		$select = "<select name='".self::getName()."' id='".self::getId()."' class='".self::getClass()."' ";
		if($this->jsOnChangeFunction != ""){
			$select .= "onchange = javascript:".$this->jsOnChangeFunction;
		}

		if(!$this->enabled){
			$select .= " disabled='disabled' ";
		}
		$select .= " >";
		$select .= "<option value=''>--------- Select ---------</option>";

		foreach ($list as $object) {
			$selected = "";
			if(self::getValue() == $object->$attributeArray[0]) {
				$selected = "selected = selected";
			}
			$select .= "<option value='".$object->$attributeArray[0]."' $selected>".$object->$attributeArray[1]."</option>";
		}
		$select .= "</select>";

		echo $select;

	}

	public function buildStaticCombo($attributeArray) {
		$select = "<select name='".self::getName()."' class='".self::getClass()."'>";

		foreach ($attributeArray as $name => $value) {
			$selected = "";
			if(self::getValue() == $value) {
				$selected = "selected = selected";
			}
			$select .= "<option value='".$value."' $selected>".$name."</option>";
		}
		$select .= "</select>";

		echo $select;
	}


	public function buildMultipleCombo($daoObj,$callBackFunctionName,$param,$object,$attributeArray) {

		if($param == null)
		$list =  call_user_func(array($daoObj, $callBackFunctionName));
		else
		$list =  call_user_func(array($daoObj, $callBackFunctionName),$param);
			
		$select = "<select name='".self::getName()."' class='".self::getClass()."' multiple='multiple'";
		$select .= " >";
		foreach ($list as $object) {
			$selected = "";
			if( is_integer(array_search($object->$attributeArray[0],self::getValues()))
			&& array_search($object->$attributeArray[0],self::getValues()) >= 0) {
				$selected = "selected = selected";
			}
			$select .= "<option value='".$object->$attributeArray[0]."' $selected>".$object->$attributeArray[1]."</option>";
		}
		$select .= "</select>";

		echo $select;
	}

	public function buildStaticMultipleCombo($attributeArray) {
		$select = "<select name='".self::getName()."' class='".self::getClass()."' multiple='multiple'>";

		foreach ($attributeArray as $name => $value) {
			$selected = "";
			if(self::getValue() == $value) {
				$selected = "selected = selected";
			}
			$select .= "<option value='".$value."' $selected>".$name."</option>";
		}
		$select .= "</select>";

		echo $select;
	}
}
?>