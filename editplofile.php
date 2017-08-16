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
?>
<!DOCTYPE html>
<!-- saved from url=(0071)file:///C:/Users/sesdf/Downloads/simple-html-css-login-form/index.html# -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <title>D_story Login</title>
  
  
  
      <link rel="stylesheet" href="form/style.css">

  
</head>

<body>
  <link href="form/css" rel="stylesheet" type="text/css">

<form method="post" action="editp.php">
<div class="box">
<h1>D_STORY</h1>

<input type="ID" value='<?php echo $_SESSION['name'] ?>' onfocus="field_focus(this, &#39;ID&#39;);" onblur="field_blur(this, &#39;ID&#39;);" class="email" disabled required>
  
<input type="password" name="pw" placeholder="Password" onfocus="field_focus(this, &#39;PW&#39;);" onblur="field_blur(this, &#39;PW&#39;);" class="email" required>
  
  <input type="password" name="pwr" placeholder="Password Retry" onfocus="field_focus(this, &#39;PW&#39;);" onblur="field_blur(this, &#39;PW&#39;);" class="email" required>
  
<input type="submit" class="btnn" value="회원정보 수정"> <!-- End Btn -->
  
</div> <!-- End Box -->
  
</form>


  
<script src="file://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
  
    <script src="form/index.js.다운로드"></script>



</body></html>