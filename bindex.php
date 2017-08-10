<?php
session_start();
$url=$_SERVER['PHP_SELF'];
$surl=split("/",$url);
$bid=$surl[2];
$con=mysqli_connect("localhost","root","kjh","project") or die("fail to connect");
	if(!empty($bid) && empty($_COOKIE['bhit' . $bid])) {
		$query = "update blog set hit = hit + 1 where id ='$bid'";
		$result = mysqli_query($con,$query);
		if(empty($result)) {
			?>
			<script>
				alert('오류가 발생했습니다.');
				history.back();
			</script>
			<?php 
		} else {
			setcookie('bhit' . $bid, TRUE, time() + (60 * 60 * 24), '/');
		}
	}
$query="select * from blog where id='$bid'";
$info=mysqli_query($con,$query);
$result=mysqli_fetch_array($info);
echo $result['hit']; //이거 방문자수
if(hash('sha512',$_SESSION['id'])==$bid){
    ?>
<!--여기 접속한 사람이 블로그 주인일때-->

<!--여기까지-->
<?php
}
else{
?>
<!--여기 접속한 사람이 게스트일때-->

<!--여기까지-->
<?php
}
    ?>