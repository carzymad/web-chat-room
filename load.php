<?php
//<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
$icon = mysql_connect("127.0.0.1", "root", "r13858251304");
if (!$icon) {
	die("Could not connect: " . mysql_error());
}
mysql_query("set names 'utf8'", $icon);
mysql_query("SET CHARACTER SET UTF8", $icon);
mysql_query("SET CHARACTER_SET_RESULTS=UTF8'", $icon); 
mysql_query("use website;", $icon);
$result = mysql_query("select * from chat;");
$i = 1;
$arr = array(); 
$row;
while ($row = mysql_fetch_array($result)) {
	$tmp = array($row['user'], $row['input']);
	array_push($arr, $tmp);
}
echo json_encode($arr);
mysql_close($icon);
?>

