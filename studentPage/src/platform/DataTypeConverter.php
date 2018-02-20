<?
   
 class DataTypeConverter
 {  
   var $data_type = array();
   	
   function DataTypeConverter()
   {
	   $this->data_type['bigint'] = "%d";
	   $this->data_type['bit'] = "'%s'";
	   $this->data_type['bool'] = "'%s'";
	   $this->data_type['boolean'] = "'%s'";
	   $this->data_type['char'] = "'%s'";
	   $this->data_type['date'] = "'%s'";
	   $this->data_type['time'] = "'%s'";
	   $this->data_type['year'] = "%d";
	   $this->data_type['varchar'] = "'%s'";
	   $this->data_type['varbinary'] = "'%s'";
	   $this->data_type['tinytext'] = "'%s'";
	   $this->data_type['tinyint'] = "%d";
	   $this->data_type['time'] = "'%s'";
	   $this->data_type['text'] = "'%s'";
	   $this->data_type['smallint'] = "%d";
	   $this->data_type['real'] = "%f";
	   $this->data_type['numeric'] = "%d";
	   $this->data_type['mediumtext'] = "'%s'";
	   $this->data_type['mediumblob'] = "'%s'";
	   $this->data_type['longtext'] = "'%s'";
	   $this->data_type['longblob'] = "'%s'";
	   $this->data_type['longtext'] = "'%s'";
	   $this->data_type['int'] = "%d";
	   $this->data_type['float'] = "%f";
	   $this->data_type['double'] = "%f";
	   $this->data_type['decimal'] = "%d";
	   $this->data_type['datetime'] = "'%s'";
   }
   
   function convert($type)
   {
   	  foreach ($this->data_type as $name => $value) 
   	  {
		if($type == $name)
		{
			return $value;
		}
   	  	else if(ereg($name,$type))
   	  	{
   	  		return $value;	
   	  		
   	  	}
   	  }
   }
 }
 /*$cc= new DataTypeConverter();
 $cc->convert("varchar(100)");*/
?>