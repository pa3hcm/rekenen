<?php
print "Content-Type: text/html\n\n";

$file = '/tmp/postcode.txt';

if (file_exists($file)) {
	$myfile = fopen($file, 'r');
	$num = intval(fgets($myfile));
	fclose($myfile);
} else {
	$num = 0;
}
?>
<html>
<head>
	<title>Rekenen</title>
	<meta http-equiv="refresh" content="1" />
</head>

<body>
<h1>Rekenen</h1>
<p><?php print $num; ?></p>
</body>

</html>
