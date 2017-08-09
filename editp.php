<?php
session_start();
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
if(preg_match($special_pattern, $name) ){
    ?>
<script>
    alert("닉네임에 특수문자가 들어갈 수 없습니다!");
    location.href="signup.php";
    </script>
<?php
    exit();
}
$hash_id=hash('sha256',$id);
$hash_pw=hash('sha256',$pw);
$con=mysqli_connect("localhost","root","kjh","project") or die("fail to connect");
$query="update login set id='$hash_id',pw='$hash_pw',name='$name' where id='$hash_id'";
mysqli_query($con,$query);
?>
<script>
alert("회원가입 성공");
location.href="index.php";
</script>