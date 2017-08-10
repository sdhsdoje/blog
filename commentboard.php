<?php
$content=mysql_real_escape_string($_POST['content']);
$name=mysql_real_escape_string($_POST['name']);
$pw=mysql_real_escape_string($_POST['pw']);
$idx=$_POST['idx'];
$con=mysqli_connect("localhost","root","kjh","project") or die ("fail to connect");
$query="insert into board_comment (content,name,pw,idx,no) values('$content','$name','$pw',$idx,'')";
mysqli_query($con,$query);
?>
<script>
alert("글이 성공적으로 저장되었습니다.");
location.href="forum.php";
</script>