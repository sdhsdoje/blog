<?php
$content=$_POST['content'];
$name=$_POST['name'];
$pw=$_POST['pw'];
$idx=$_POST['idx'];
$con=mysqli_connect("localhost","root","kjh","project") or die ("fail to connect");
$query="insert into board_comment (content,name,pw,idx,no) values('$content','$name','$pw',$idx,'')";
mysqli_query($con,$query);
?>
<script>
alert("글이 성공적으로 저장되었습니다!");
location.href="view.php?idx=<?=$idx ?>";
</script>
