<?php

// print "Content-Type: text/plain\n\n";

function IsPrime($n) {  
	for($x=2; $x<$n; $x++) {  
		if($n %$x ==0) { return 0; }  
	}
	return 1;  
}

$num = 0;
while ($num < 9999) {
	$num = intval(file_get_contents('http://priem.oc.utreg.net/api.php'));
	if ($num > 0) {
		if (IsPrime($num)) {
			print "$num is a prime number\n";
		} else {
			print "$num is NOT a prime number\n";
		}
	}
}
