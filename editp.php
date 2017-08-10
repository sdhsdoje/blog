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
$id=$_POST['id'];
$pw=$_POST['pw'];
$pwr=$_POST['pwr'];
$name=$_POST['name'];
$special_pattern = "/[`~!@#$%^&*|\\\'\";:\/?^=^+_()<>]/";
if(!(isseet($id)||isset($pw)||isset($pwr)||isset($name))){
?>
<script>
alert("정보를 모두 입력해 주세요!");
location.href="editprofile.php";
</script>
<?php
    exit();
}
if(!strcmp($pw,$pwr)){
?>
<script>
alert("비밀번호와 비밀번호 확인이 다릅니다!");
</script>
<?php
    exit();
}
mysql_real_escape_string($name);
$hash_id=hash('sha512',$id);
$hash_pw=hash('sha512',$pw);
$con=mysqli_connect("localhost","root","kjh","project") or die("fail to connect");
$query="update login set id='$hash_id',pw='$hash_pw',name='$name' where id='$hash_id'";
mysqli_query($con,$query);
?>
<script>
alert("회원가입 성공");
location.href="index.php";
</script>