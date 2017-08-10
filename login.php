<?php
session_start();
$id=$_POST['id'];
$pw=$_POST['pw'];
    if(!(isset($id)||isset($pw))){
        ?>
<script>
alert("아이디와 비밀번호를 모두 입력해 주세요.");
</script>
    <?php
        exit();
    }
$hash_id=hash('sha512',$id);
$hash_pw=hash('sha512',$pw);
$con=mysqli_connect("localhost","root","kjh","project") or die("fail to connect");
$query="select * from login where id='$hash_id' and pw='$hash_pw'";
$info=mysqli_query($con,$query);
$result=mysqli_fetch_array($info);
if(isset($result['id'])){
    $_SESSION['id']=$result['id'];
    $_SESSION['name']=$result['name'];
}
?>
<script>
location.href="index.php";
</script>