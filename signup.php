<?php
$id=$_POST['id'];
$pw=$_POST['pw'];
$name=$_POST['name'];
$pwr=$_POST['pwr'];
if($pw!=$pwr){
?>
<script>
alert("비밀번호와 비밀번호 확인이 다릅니다!");
location.href="form/signup.html";
</script>
<?php
    exit();
}
$hash_id=hash('sha512',$id);
$hash_pw=hash('sha512',$pw);
$con=mysqli_connect("localhost","root","kjh","project") or die("fail to connect");
$query="insert into login (id,pw,name) values('$hash_id','$hash_pw','$name')";
mysqli_query($con,$query);
?>
<script>
alert("회원가입 성공");
location.href='createblog.php?id=<?php echo $name ?>';
</script>
