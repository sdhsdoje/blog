<?php
$id=$_POST['id'];
$pw=$_POST['pw'];
$name=$_POST['name'];
$pwr=$_POST['pwr'];
$code=$_POST['code'];
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
$query="select * from code where code='$code'";
$info=mysqli_query($con,$query);
$result=mysqli_fetch_array($info);
if(!isset($result['code'])){
    ?>
    <script>
alert("등록 코드가 존재하지 않습니다!");
        location.href="form/signup.html"
</script>
    <?php
    exit();
}
$query="insert into login (id,pw,name) values('$hash_id','$hash_pw','$name')";
mysqli_query($con,$query);
?>
<script>
alert("회원가입 성공");
location.href='createblog.php?id=<?php echo $name ?>';
</script>
