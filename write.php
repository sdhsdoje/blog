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
$title=mysql_real_escape_string($_POST['title']);
$content=mysql_real_escape_string($_POST['content']);
$name=$_SESSION['name'];
$hash_id=hash('sha512',$_SESSION['id']);
$con=mysqli_connect("localhost","root","kjh","project") or die ("fail to connect");
$query="insert into title,content,name,id,time,idx values('$title','$content','$name','$hash_id','','')";
mysqli_query($con,$query);
?>
<script>
alert("글이 성공적으로 저장되었습니다.");
location.href=<?php $hash_id+"/index.php" ?>;
</script>