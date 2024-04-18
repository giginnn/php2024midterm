<html>
<?php
include("include.inc");
?>
<head>
<title>高大資管論文投稿系統</title>
<font size="10">高大資管論文投稿系統</font><br/>
請選擇你的角色:<br/>
</head>
<form action="check.php" method="get">

帳號:<input type="text" name="sID" value="" placeholder="Please input your account">
<br/>
<br/>
密碼:<input type="password" name="sPWD" required> <br/>
<br/>
<input type="submit" value="提交">
</form>
<?php
if(isset($_COOKIE["username"])){
    echo $_COOKIE["username"]."Welcome back!";
}
else{
    echo "Nice to see you";
}
?>
<?
ob_flush();
?>

</html>