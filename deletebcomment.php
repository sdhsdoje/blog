<?php
$no=$_POST['no'];
$pw=$_POST['pw'];
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
$query="delete from board_comment where no=$no"
mysqli_query($con,$query);
?>
<script>
alert("댓글삭제 성공");
location.href="forum.php";
</script>