<?php

$user = $_SERVER['PHP_AUTH_USER'];
$pw = $_SERVER['PHP_AUTH_PW'];
if(($user != "zaz") || ($pw != "jaimelespetitsponeys"))
{
	Header("WWW-authenticate: basic realm=''Espace membres''");
	Header("HTTP/1.0 401 Unauthorized");
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
}
else {
	$path = '../img/42.png';
	//$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/png' . ';base64,' . base64_encode($data);

	echo "<html><body> Bonjour Zaz<br />\n<img src='$base64'>\n</body></html>\n";
}

?>

<?php
/*
$> curl --user zaz:jaimelespetitsponeys http://e3r11p1.42.fr:8100/ex06/members_only.php
<html><body>
Bonjour Zaz<br />
<img src='data:image/png;base64,iVBORw0KGgoAAAA...
... ...
...6MIHnr2t+eeO4Fr+v/H80AmcVvzqAfAAAAAElFTkSuQmCC'>
</body></html>
$>
curl -v --user root:root http://e3r11p1.42.fr:8100/ex06/members_only.php
*/

?>