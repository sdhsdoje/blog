<?php
$id=$_GET['id'];
echo $id;
mkdir($id,7777);
$srcfile="/var/www/html/project/bindex.php";
$dstfile="/var/www/html/project/".$id."/index.php";
echo "<br>".$dstfile;
copy($srcfile,$dstfile);
?>
<script>
alert("블로그가 생성되었습니다!");
location.href=<?php $id+"index.php" ?>;
</script>
