<?php

	///Задание №1

	$i = 0;
		while ($i <= 100) {
			if($i % 3 == 0) {
				echo "$i";
			}
			else {
   				echo "<br>";
			}
				$i++;
		}


	//Задание №2

	

	//Задание №3

	$cities = ["Moscow region" => ["Moscow", "Mutishi", "Khimki"], "Leningrad region" => ["SP", "Pavlovsk", "Krondshtat"], "Ryasan region" => ["maps.yandex.ru"]];

		echo "<pre>";
		print_r($cities);
		echo "<pre>";

			foreach($cities as $key => $value){
				echo "inside $key stays cities $value<br>";
	}


	//Задание №5

		$a = "We are the world";

			function zamena($a) {
				str_replace( , _,$a);
				return $zamena;
		}
		    	echo zamena($a);

?>