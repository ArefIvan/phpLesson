<?php

	function renderTemplate($file,$data){
		if (file_exists($file)){
			ob_start();
			extract($data);
			require_once ($file);
	
			return ob_get_clean();
		}
		else{
			return 'Шаблон не найден!';
		}
	};
	function NumberToPrice($num){
	   $price = ceil($num);
   
    // return  print(number_format($price,0,'',' ') . '<b class="rub">р</b>');
    	return  print(substr($price,0,-3) .' '.substr($price,-3) .'<b class="rub">р</b>');   
   };

	function esc($str){

		return htmlspecialchars($str);
	};

	function timer($time){
		$timer= strtotime($time) - time();

		return date("G:i",$timer);


	};

 ?>