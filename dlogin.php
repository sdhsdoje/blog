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
$con=mysqli_connect("localhost","root","kjh","project") or die("fail to connect");
$query="delete from login where id='$hash_id'";
mysqli_query($con,$query);
?>
<script>
alert("회원탈퇴 성공");
location.href="index.php";
</script>