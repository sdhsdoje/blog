<?php
session_start();
$name=$_SESSION['name'];
$con=mysqli_connect("localhost","root","kjh","project");
$idx=$_GET['idx'];
$query="delete from board where idx=$idx";
mysqli_query($con,$query);
echo"
<script>
alert('글삭제 성공');
location.href='$name';
</script>";
?>

