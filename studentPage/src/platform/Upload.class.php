<?php

class UploadFile
{
	var $file;
	var $file_name="default";
	var $file_path="";
	var $extension;
	var $enabledImages = array(".gif",".png",".jpg",".jpeg",".GIF",".PNG",".JPG",".JPEG",".txt",".doc",".docx",".dot",".pdf",".rtf",".rar",".zip",".xls",".ppt",".pptx",".html",".htm");
	var $file_size = 0;

	function setFilename($file_name)
	{
		$this->file_name=$file_name;
	}

	function getFileName(){
		return $this->file_name;
	}
	
	function setFile($file)
	{
		$this->file=$file;
	}

	function getFile(){
		return $this->file;
	}
	
	function setFilePath($file_path){
		$this->file_path=$file_path;
	}

	function getFilePath(){
		return $this->file_path;
	}

	function setExtention()
	{
		$dotpos=strpos($_FILES[$this->getFile()]['name'],".");		
	  	$ext=substr($_FILES[$this->getFile()]['name'],$dotpos );
	    $this->extension=$ext;
	}

	function getExtention()
	{
	  return $this->extension;
	}
	
	function Upload()
	{
		$this->setExtention();
		$flag = false;
		
		for($x = 0 ;$x<count($this->enabledImages);$x++)
		{
			if($this->getExtention()== $this->enabledImages[$x]){
			$flag = true;
			}
		}
		
		if($flag)
		{			
			if(is_uploaded_file($_FILES[$this->getFile()]['tmp_name']))
			{
				move_uploaded_file($_FILES[$this->getFile()]['tmp_name'],$this->getFilePath().'/'.$this->getFileName().$this->getExtention());
				return true;
			}
			
		}
	}
}
?>