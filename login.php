<?php
session_start();
$name = $_POST['name'];
//echo "test";
//echo $name;
$passwd = $_POST['passwd'];
$icon = mysql_connect("127.0.0.1", "root", "r13858251304");
mysql_query("SET NAMES 'UTF8';", $icon);
mysql_query("SET CHARACTER SET 'UTF8';", $icon);
mysql_query("SET CHARACTER_SET_RESULTS='UTF8';", $icon);
mysql_query("use website");
$command = "select * from user where name='$name';";
$result = mysql_query($command, $icon);
$row = mysql_fetch_array($result);
if ($row['password'] == $passwd && $passwd != "") {
	echo "success";
	$_SESSION['login'] = true;
	$_SESSION['name'] = $name;
} else {
	echo "fail";
};
mysql_close($icon);
?>

