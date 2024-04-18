<?php
include("include.inc");
?>
<?php
$uID3="author";
$uPWD3="345";
$date = strtotime("+7 days", time());
setcookie("username",$uID3,$date);

$sSummary=$_POST["sSummary"];
    echo "Your Summary:<br/>".addslashes(nl2br($sSummary));
?>
<?php
if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Yes"){
        echo "<br/>";
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
