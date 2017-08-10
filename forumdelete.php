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
$idx=$_GET['idx'];
if(!is_numeric(idx)){
    ?>
<script>
alert("부적절한 요소 감지");
location.href="index.php"
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
location.href="index.php"
    </script>
<?php
    exit();
}
$query="delete from forum where idx=$idx";
mysqli_query($con,$query);
?>
<script>
alert("글삭제 성공");
location.href="forum.php"
</script>