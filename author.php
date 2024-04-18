<html>
<?php
include("include.inc");
?>
<head>
<font size="10"><center>Author您好，歡迎進入論文投稿網頁</center></font>
</head>
<form action="showpaper.php" method="post">
論文標題:<br/>
<input type="text" name="sTitle" value=""><br/>
作者姓名:<input type="text" name="sName" value=""><br/>
作者Email:
<input type="email" name="sEmail" value=""><br/>
論文摘要:
<textarea name="sSummary" value="" rows="10" cols="20">

</textarea>
<input type="submit" value="提交">
</form>

<?php
$uID3="author";
if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Yes"){
        $date = strtotime("+7 days", time());
        setcookie("username",$uID3,$date);
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