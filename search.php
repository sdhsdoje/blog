<?php
$search=$_POST['search'];
$url="http://search.daum.net/search?nil_suggest=btn&w=blog&lpp=10&DA=SBC&q="+$search;
?>
<script>
window.open('<?php echo $url ?>','<?php echo $search ?>');
</script>