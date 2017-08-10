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
$idx=$_GET['idx'];
if(!is_numeric(idx)){
    ?>
<script>
alert("부적절한 요소 감지");
location.href=<?php echo $hash_id+"/index.php" ?>;
</script>
<?php
    exit();
}
$special_pattern = "/[`~!@#$%^&*|\\\'\";:\/?^=^+_()<>]/";
if(preg_match($special_pattern, $idx) ){
    ?>
<script>
    alert("부적절한 침입 감지");
    location.href="index.php";
    </script>
<?php
    exit();
}
$con=mysqli_connect("localhost","root","kh","project") or die ("fail to connect");
$query="select * from board where idx='$idx'";
$info=mysqli_query($con,$query);
$result=mysqli_fetch_array($info);
if($result['id']!=hash('sha512',$_SESSION['id'])){
    ?>
<script>
    alert("부적절한 침입 감지");
   location.href=<?php echo $hash_id+"/index.php" ?>;
    </script>
<?php
    exit();
}
echo htmlspecialchars($result['title']);
echo htmlspecialchars($result['name']);
echo htmlspecialchars($result['tile']);
echo htmlspecialchars($result['content']);
?>