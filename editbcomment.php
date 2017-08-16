<?php
$no=$_GET['no'];
$pw=$_GET['pw'];
$con=mysqli_connect("localhost","root","kjh","project");
$query="select * from board_comment where no=$no";
$info=mysqli_query($con,$query);
$result=mysqli_fetch_array($info);
if($result['pw']!=$pw){
    ?>
<script>
    alert("비밀번호가 같지 않습니다!");
   location.href="forum.php";
    </script>
<?php
    exit();
}
$content=mysql_real_escape_string($_POST['content']);
$query="update board_comment set content='$content' where no=$no"
mysqli_query($con,$query);
?>
<script>
alert("댓글수정 성공");
location.href="forum.php";
</script>
