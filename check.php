<?php 
session_start();
?>
<meta charset=utf8>  
<?php
$uID1="chair";
$uPWD1="123";

$uID2="reviewer";
$uPWD2="234";

$uID3="author";
$uPWD3="345";

$sID=$_GET["sID"];

$sPWD=$_GET["sPWD"];

if($uID1==$sID && $uPWD1==$sPWD){
    $_SESSION["check"]="Yes";
    header("Location:chair.php");
}
elseif($uID2==$sID && $uPWD2==$sPWD){
    $_SESSION["check"]="Yes";
    header("Location:reviewer.php");
}
elseif($uID3==$sID && $uPWD3==$sPWD){
    $_SESSION["check"]="Yes";
    header("Location:author.php");
}
else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}
?>