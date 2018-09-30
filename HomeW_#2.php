<?php

	//Задание №1

	$a=rand(-100,100);
	$b=rand(-100,100);

	if ($a>=0 && $b>=0) {
		$res=$a-$b; echo "$res";
	} 
		elseif ($a<0 && $b<0) {
			$res=$a*$b; echo "$res";
	 	}
	 		elseif ($a>=0 && $b<0) {
				$res=$a+$b; echo "$res";
	 		}
	 			elseif ($a<0 && $b>=0) {
					$res=$a+$b; echo "$res";
	 			}


	//Задание №2

	
	$a=rand(0,15);

		switch ($a) {
		    case ($a): $b = range($a, 15);
		    	print_r($b);
		    		break;
	}

	//Задание №3


	$a=rand(-100,100);
	$b=rand(-100,100);

		function sum($a, $b) {
		    $sum=$a+$b;
		    	return $sum;
		}
		    	echo sum($a, $b);

		function minus($a, $b) {
		    $minus=$a-$b;
		    	return $minus;
		}
		    	echo sum($a, $b);

		function del($a, $b) {
		    $del=$a/$b;
		    	return $del;
		}
		    	echo sum($a, $b);

		function umn($a, $b) {
		    $umn=$a*$b;
		    	return $umn;
		}
		    	echo sum($a, $b)."<br>";
		    	echo minus($a, $b)."<br>";
		    	echo del($a, $b)."<br>";
		    	echo umn($a, $b);


?>