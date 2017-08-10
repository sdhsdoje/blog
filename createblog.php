<?php
session_start();
if(!isset($_SESSION['id'])){
    ?>
<script>
alert("부적절한 침입 감지");
location.href="index.php"
</script>
<?php
    exit();
}
$hash_id=hash('sha512',$_SESSION['id']);
mkdir($hash_id);
copy("bindex.php",$hash_id+"/"+"index.php");
?>
<script>
alert("블로그가 생성되었습니다!");
location.href=<?php $hash_id+"index.php" ?>;
</script>