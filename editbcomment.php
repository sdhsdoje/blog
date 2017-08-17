<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$no=$_GET['no'];
$pw=$_GET['pw'];
$msg=$_GET['msg'];
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
$query="update board_comment set content='$msg' where no=$no";
mysqli_query($con,$query);
?>
<script>
alert("댓글수정 성공");
history.back(-1);
</script>
