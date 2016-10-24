<?php
session_start();
if ($_POST['input'] != '' && $_SESSION['login'] == true) {
	$icon = mysql_connect('127.0.0.1', 'root', 'r13858251304');
	mysql_query('use website', $icon);
	//echo $_POST['input'];
	mysql_query("set names 'utf8'", $icon);
	mysql_query("SET CHARACTER SET UTF8", $icon);
	mysql_query("SET CHARACTER_SET_RESULTS=UTF8'", $icon); 
	mysql_query("use website;", $icon);

	echo $_POST['input'];
	$input = $_POST['input'];
	$name = $_SESSION['name'];
	$command = "insert chat (input, user) values ('$input', '$name');";
	mysql_query($command, $icon);
	//mysql_query("insert chat (input) values ('lalalalalala');", $icon);
	mysql_close($icon);
} else {
	echo "";
}

?>

