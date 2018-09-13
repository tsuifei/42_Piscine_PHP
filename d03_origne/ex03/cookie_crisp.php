<?php
$action = $_GET["action"] ;
$name = $_GET["name"];
$value = $_GET["value"];

if ($action && $name)
{
	if ($action === "set" && $value)
	{
		setcookie($name, $value, time() + 3600);
	}
	else if ($action === "get" && $_COOKIE[$name] && !$value) {
		if($_COOKIE[$name])
			echo $_COOKIE[$name]."\n";
	}
	else if ($action === "del")
	{
		setcookie($name, null, time() - 1);
	}
}

//Créez une page cookie_crisp.php qui permet de créer, lire, et effacer un cookie
/*

$> curl -c cook.txt 'http://e3r11p1.42.fr:8101/ex03/cookie_crisp.php?action=set&name=plat&value=choucroute'
$> curl -b cook.txt 'http://e3r11p1.42.fr:8100/ex03/cookie_crisp.php?action=get&name=plat'
choucroute
$> curl -c cook.txt 'http://e3r11p1.42.fr:8100/ex03/cookie_crisp.php?action=del&name=plat'
$> curl -b cook.txt 'http://e3r11p1.42.fr:8100/ex03/cookie_crisp.php?action=get&name=plat'
$>
*/

?>

