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
    history.back(-1);
    </script>
<?php
    exit();
}
$query="delete from board_comment where no=$no";
mysqli_query($con,$query);
?>
<script>
alert("댓글삭제 성공");
history.back(-1);
</script>
