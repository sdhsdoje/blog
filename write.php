<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
$name=$_SESSION['name'];
$hash_id=hash('sha512',$_SESSION['id']);
$title=$_POST['title'];
$content=$_POST['content'];
$con=mysqli_connect("localhost","root","kjh","project") or die ("fail to connect");
$query="insert into board (title,content,name,id,time,idx) values('$title','$content','$name','$hash_id','','')";
mysqli_query($con,$query) or die("fail query");
echo "
<script>
alert('글이 성공적으로 저장되었습니다.');
location.href='$name/index.php';
</script>
"
?>
<script>
alert("글이 성공적으로 저장되었습니다.");
location.href=<?php $hash_id+"/index.php" ?>;
</script>