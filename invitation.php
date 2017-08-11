<?php
session_start();
$con=mysqli_connect("localhost","root","kjh","project") or die ("fail to connect");
$query="select * from login limit 10";
$info=mysqli_query($con,$query);
for($result=mysqli_fetch_array($info))
{
    $name=$result['name'];
    echo $name;
}
if(isset($_SESSION['id'])){
    ?>
<!--여기 사용자가 로그인 햇을때 페이지(초대장 보내기 버튼)-->

<!--여기까지-->
<?php
}else{
?>
<!--여기 사용자가 로그인 안되어있을때-->

<!--여기까지-->
<?php
}
    ?>