<?php
class GridBuilder {
	private $index  = 0;
	private $offset = 0;
	private $columnArray = array() ;

	public function getIndex() {return $this->index;}
	public function getOffset() {return $this->offset;}
	public function getColumnArray() {return $this->columnArray;}

	public function setColumnArray($columnArray) {$this->columnArray = $columnArray;}
	public function setIndex($index) {$this->index = $index;}
	public function setOffset($offset) {$this->offset = $offset;}

	public function buildGrid($daoObj,$callBackFunctionName,$object,$attributeArray) {

		if(self::getIndex() == 0 && self::getOffset() == 0 ){
			$list =  call_user_func(array($daoObj, $callBackFunctionName));
		}else {
			$list =  call_user_func(array($daoObj, $callBackFunctionName),self::getIndex(),self::getOffset());
		}

		self::printGrid($list,$object,$attributeArray);
	}

	public function buildGridWhParameter($daoObj,$callBackFunctionName,$param,$object,$attributeArray){
		if(self::getIndex() == 0 && self::getOffset() == 0 ){
			$list =  call_user_func(array($daoObj, $callBackFunctionName),$param);
		}else {
			$list =  call_user_func(array($daoObj, $callBackFunctionName),$param,self::getIndex(),self::getOffset());
		}

		self::printGrid($list,$object,$attributeArray);
	}

	private function printGrid($list,$object,$attributeArray) {
		$table = "<table width='60%'><tr>";
		foreach (self::getColumnArray() as $columnName) {
			$table .= "<td>".$columnName."</td>";
		}
		$table .= "</tr>";

		foreach ($list as $object) {
			$table .= "<tr>";
			foreach ($attributeArray as $name) {
				$table .= "<td>".$object->$name."</td>";
			}
			//$table .= "<td><a href='#'>Edit/Delete</td>";
			$table .= "</tr>";
		}

		$table .= "</table>";
			
		echo $table;
	}
}
?>