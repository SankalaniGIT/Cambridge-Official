<?php
class Primery_key {
	function PK_Generator($last_key){

		$letter=substr($last_key,0,4);
		$digit=substr($last_key,4);
		$num=intval($digit);
		++$num;
		$z0="";
		$z1="0";
		$z2="00";
		$z3="000";
		$z4="0000";
		$i=$num;

		if($i<10){
			$pk=$letter.$z4.$i;
		}
		elseif($i<100){
			$pk=$letter.$z3.$i;
		}
		elseif($i<1000){
			$pk=$letter.$z2.$i;
		}
		elseif($i<10000){
			$pk=$letter.$z1.$i;
		}
		elseif($i<100000){
			$pk=$letter.$z0.$i;
		}

		return $pk;
	}

	function PK_Generator2($last_key){
		//AH10001
		$letter=substr($last_key,0,2);
		$digit=substr($last_key,2);
		$num=intval($digit);
		++$num;
		$z0="";
		$z1="0";
		$z2="00";
		$z3="000";
		$z4="0000";
		$i=$num;

		if($i<10){
			$pk=$letter.$z4.$i;
		}
		elseif($i<100){
			$pk=$letter.$z3.$i;
		}
		elseif($i<1000){
			$pk=$letter.$z2.$i;
		}
		elseif($i<10000){
			$pk=$letter.$z1.$i;
		}
		elseif($i<100000){
			$pk=$letter.$z0.$i;
		}

		return $pk;
	}

	function PK_Generator3($last_key){
		//A1, A2, An
		$letter=substr($last_key,0,1);
		$digit=substr($last_key,1);
		$num=intval($digit);
		++$num;
		$z0="";
		//	$z1="0";
		//	$z2="00";
		//	$z3="000";
		//	$z4="0000";
		$i=$num;

		if($i<10){
			$pk=$letter.$z4.$i;
		}
		elseif($i<100){
			$pk=$letter.$z3.$i;
		}
		elseif($i<1000){
			$pk=$letter.$z2.$i;
		}
		elseif($i<10000){
			$pk=$letter.$z1.$i;
		}
		elseif($i<100000){
			$pk=$letter.$z0.$i;
		}

		return $pk;
	}
}
?>