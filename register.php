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
$command = "insert user (name, password) values('$name', '$passwd');";
mysql_query($command, $icon);
mysql_close($icon);
echo "success";
?>

