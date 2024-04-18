<?php
include("include.inc");
?>
<?php
$uID2="reviewer";
$uPWD2="234";
$date = strtotime("+7 days", time());
setcookie("username",$uID2,$date);


$sD=$_POST["sD"];
    echo "Your Decision:".$sD."<br/>";
    $sCommet=$_POST["sCommet"];
    echo "Your Comment:<br/>".addslashes(nl2br($sCommet));
    
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
