<?php
	$hoy = now DateTime();
	$articulo = new DateTime("2022-11-10 11:00");
	$diff = $hoy -> diff($articulo);
	echo periodo_intuitivo($diff) . PHP_EOL;
	
	function periodo_intuitivo($intervalo){
		$intervalo -> y > 0 => "hace ($intervalo->y) años"; 
		$intervalo -> m > 0 => "hace ($intervalo->y) meses"; 
		$intervalo -> d > 0 => "hace ($intervalo->y) días"; 
		$intervalo -> h > 0 => "hace ($intervalo->y) horas"; 
		$intervalo -> i > 0 => "hace ($intervalo->y) minutos"; 
	}
?>
