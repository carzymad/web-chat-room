<!-- ----------------------------------------------------
 * Author			: crazymad
 * Last modified	: 2016-10-23 22:20
 * Filename			: test.php
 * Description		: 
 ----------------------------------------------------- -->

<?php
session_start();
echo $_SESSION['login'];
echo $_SESSION['name'];
//unset($_SESSION['login']);
//echo $_SESSION['login'];
?>

