<?php
$id=$_GET['id'];
mkdir($id,0777);
$srcfile="/var/www/html/project/bindex.php";
$dstfile="/var/www/html/project/".$id."/index.php";
copy($srcfile,$dstfile);
echo "<script>
alert('블로그가 생성되었습니다!');
location.href='".$id."/index.php';
</script>";
?>
