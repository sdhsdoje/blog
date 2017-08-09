<?php
session_start();
$hash_id=hash('sha256',$_SESSION['id']);
$con=mysqli_connect("localhost","root","kjh","project") or die("fail to connect");
$query="delete from login where id='$hash_id'";
mysqli_query($con,$query);
?>
<script>
alert("회원탈퇴 성공");
location.href="index.php";
</script>