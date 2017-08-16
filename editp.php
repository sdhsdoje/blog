<?php
session_start();
echo "Tst";
if(!isset($_SESSION['id'])){
    ?>
<script>
alert("부적절한 침입 감지");
location.href="index.php"
</script>
<?php
    exit();
}
$pw=$_POST['pw'];
$pwr=$_POST['pwr'];
$special_pattern = "/[`~!@#$%^&*|\\\'\";:\/?^=^+_()<>]/";
if($pw!=$pwr){
?>
<script>
alert("비밀번호와 비밀번호 확인이 다릅니다!");
</script>
<?php
    exit();
}
$hash_pw=hash('sha512',$pw);
$con=mysqli_connect("localhost","root","kjh","project") or die("fail to connect");
$query="update login set pw='$hash_pw'";
mysqli_query($con,$query);
?>
<script>
alert("회원정보가 수정되었습니다.");
location.href="index.php";
</script>