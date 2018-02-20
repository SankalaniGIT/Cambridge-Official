<?php
class password
{
	function gen_password()
	{
		$ranValue=0;
		srand((double)microtime()*1000000);  
		$ranValue=rand(0,10000).chr(rand(65,90)).chr(rand(65,90));
		return $ranValue; 
	
	}
}
?> 
