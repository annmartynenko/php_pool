<?php
if ($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == 'jaimelespetitsponeys'){
	$data = file_get_contents("../img/42.png");
	$base64 = 'data:image/png;base64,' . base64_encode($data);
	echo "<html><body>"."\n"."Hello Zaz<br />"."\n"."<img src='$base64'>"."\n"."</body></html>"."\n";
} else {
	header('WWW-Authenticate: Basic realm=\'\'Member area\'\'');
	header('HTTP/1.0 401 Unauthorized');
	echo "<html><body>That area is accessible for members only</body></html>\n";
}
?>