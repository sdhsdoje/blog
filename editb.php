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
$idx=$_POST['idx'];
if(!is_numeric(idx)){
    ?>
<script>
alert("부적절한 요소 감지");
location.href=<?php echo $hash_id+"/index.php" ?>;
</script>
<?php
    exit();
}
$con=mysqli_connect("localhost","root","kjh","project");
$query="select * from board where idx=$idx";
$info=mysqli_query($con,$query);
$result=mysqli_fetch_array($info);
if($result['id']!=hash('sha512',$_SESSION['id'])){
    ?>
<script>
    alert("부적절한 침입 감지");
   location.href=<?php echo $hash_id+"/index.php" ?>;
    </script>
<?php
    exit();
}
$title=mysql_real_escape_string($_POST['title']);
$content=mysql_real_escape_string($_POST['content']);
$query="update board set title='$title',content='$content' where idx=$idx"
mysqli_query($con,$query);
$hash_id=hash('sha512',$_SESSION['id']);
?>
<script>
alert("글수정 성공");
location.href=<?php echo $hash_id+"/index.php" ?>;
</script>