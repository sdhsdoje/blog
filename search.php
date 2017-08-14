<?php
$search=$_POST['search'];
$url="https://search.naver.com/search.naver?where=post&sm=tab_jum&ie=utf8&query=".$search;
?>
<script>
window.open('<?php echo $url ?>','<?php echo $search ?>');
location.href="index.php";
</script>
