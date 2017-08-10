<?php
session_start();
if(!isset($_SESSION['id'])){
    ?>
<script>
alert("부적절한 침입 감지");
location.href="index.php"
</script>
<?php
    exit();
}
$hash_id=hash('sha512',$_SESSION['id']);
$name=$_SESSION['name'];
$title=$_POST['title'];
$content=$_POST['content'];

$con=mysqli_connect("localhost","root","kjh","project");
$query="insert into forum title,content,name,id,time,idx values('$title','$content','$name','$hash_id','','')"
mysqli_query($con,$query);
?>
<script>
alert("글 작성 성공");
location.href="forum.php";
</script>