<?php
 
function fatorial($x){
	if ($x >=1) {
		echo $x . '<br>';
		return $x * fatorial($x - 1);
	}
}

echo fatorial(4);