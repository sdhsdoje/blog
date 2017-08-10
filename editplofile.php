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
$id=$_SESSION['id'];
$name=$_SESSION["name"];
echo htmlspecialchars($id);
echo htmlspecialchars($name);
?>