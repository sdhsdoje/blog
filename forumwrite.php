<?php
session_start();
$hash_id=hash('sha512',$_SESSION['id']);
$name=$_SESSION['name'];
$title=$_POST['title'];
$content=$_POST['content'];

$con=mysqli_connect("localhost","root","kjh","project") or die("fail con");
$query="insert into forum (title,content,name,id,time,idx) values('$title','$content','$name','$hash_id',now(),'')";
mysqli_query($con,$query) or die("fail query");
?>
<script>
alert("글 작성 성공");
location.href="Forum/Forum.php";
</script>
