<html>
<?php
include("include.inc");
?>
<head>
<font size="10"><center>Chair您好，歡迎進入論文評論網頁</center></font>
</head>
<?php
$uID1="chair";

if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Yes"){
        $date = strtotime("+7 days", time());
        setcookie("username",$uID1,$date);
        echo "Welcome<br/>";
        echo"<a href='logout.php'>Logout</a>";
    }
    else{
        echo "illegal login<br/>";
        echo "After 3s returning to login screen";
        header("Refresh:3;url=index.php");
    }
}
else{
    echo "illegal login<br/>";
    echo "After 3s returning to login screen";
    header("Refresh:3;url=index.php");
}
?>
<?
ob_flush();
?>

</html>