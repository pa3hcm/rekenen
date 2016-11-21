<?php
print "Content-Type: text/plain\n\n";

$file = '/tmp/postcode.txt';

if (file_exists($file)) {
	$myfile = fopen($file, 'r');
	$num = intval(fgets($myfile));
	fclose($myfile);
	$num++;
	if ($num > 1000 && $num < 10000) {
		$myfile = fopen($file, 'w');
		fwrite ($myfile, $num);
		fclose($myfile);
	} else {
		$num = 0;
	}
} else {
	$num = 1000;
	$myfile = fopen($file, 'w');
	fputs ($myfile, $num);
	fclose($myfile);
}

print $num;
?>
