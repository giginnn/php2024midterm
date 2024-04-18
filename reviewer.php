<html>
<?php
include("include.inc");
?>
<head>
<font size="10"><center>Reviewer您好，歡迎進入論文評論網頁</center></font>
</head>
<form action="showreview.php" method="post">

論文評審決定:
<input type="radio" name="sD" value="Accept">Accept
<input type="radio" name="sD" value="Minor Revision" checked>Minor Revision
<input type="radio" name="sD" value="Major Revision">Major Revision
<input type="radio" name="sD" value="Reject">Reject
<br/>
論文評論評語:
<textarea name="sCommet" value="" rows="10" cols="20">

</textarea>
<input type="submit" value="提交"><br/>
</form>
<?php
$uID2="reviewer";
if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Yes"){
        $date = strtotime("+7 days", time());
        setcookie("username",$uID2,$date);
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
</html>