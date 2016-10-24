<!-- ----------------------------------------------------
 * Author			: crazymad
 * Create time		: 2016-10-20 23:29
 * Filename			: index.php
 * Description		: a simple chat room
 ----------------------------------------------------- -->


<?php
?>

<!DOCTYPE html>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>聊天室</title>
<link rel="shortcut con" href="chat.ico">
</head>

<script src="jquery.js"></script>
<script src="chat.js"></script>
<link rel="stylesheet" type="text/css" href="model.css" />

<body>

<h2 id="welcome">欢迎<?php session_start(); echo "<a href=\"#\" id=\"change-account\">" . $_SESSION['name'] . "</a>"; ?>来到聊天室</h2>

<div>
<div style="width: 30%;">
	<div id="show" style="overflow: auto; height: 300px; width: 100%; border: 1px solid gray">
	</div>
</div>
<div style="width: 30%; margin-top: 10px;" id="text">
	<textarea id="input" style="width:100%; height:100px; resize: none" class="input" name="input"></textarea> <br />
	<?php
	session_start();
	if ($_SESSION['login'] == true) {
		echo 	"<input class=\"input-bnt\" id=\"input-submit\" type=\"submit\" style=\"padding: 5px 5px 5px 5px; width: 100%; background: #fff;\" value=\"提交\"> ";
	} else {

		echo 	"<input class=\"input-bnt\" id=\"input-submit\" type=\"submit\" style=\"padding: 5px 5px 5px 5px; width: 100%; background: #fff;\" value=\"登录\"> ";
	}
	?>
	<!--<input class="input-bnt" id="input-submit" type="submit" style="padding: 5px 5px 5px 5px; width: 100%; background: #fff;" value="提交">--> 
</div>
</div>

<div class="model-overlay">
<div class="model-data" style="" id="div-login" >
	<div id="login">
	账号:<input id="id" type="text" /> <br/>
	<div style="height: 10px; width: 100%;"></div>
	密码:<input id="psd" type="password" />
	<div style="height: 10px; width: 100%;"></div>
	<input id="sub" type="submit" value="登录" /> <br />
	<a id="change-register" href="#" style="cursor: pointer; font-size:12px;">注册新账号</a>
	</div>
	<div id="register">
	账号:<input id="id-2" type="text" /> <br/>
	<div style="height: 10px; width: 100%;"></div>
	密码:<input id="psd-2" type="password" />
	<div style="height: 10px; width: 100%;"></div>
	<input id="sub-2" type="submit" value="注册" /> <br />
	<a id="change-login" href="#" style="cursor: pointer; font-size:12px;">登录已有账号</a>
	</div>
</div>
</div>

</body>
	
</html>
