<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$idx=$_POST['idx'];
$title=$_POST['title'];
$content=$_POST['content'];
$con=mysqli_connect("localhost","root","kjh","project") or die("fail connect");
$query="update board set title='$title',content='$content' where idx=$idx";
mysqli_query($con,$query) or die ("fail query");
echo"
<script>
alert('글수정 성공');
location.href='view.php?idx=$idx';
</script>";
?>
