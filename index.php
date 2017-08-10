<?php
session_start();
if(!isset($_SESSION['id'])){
    ?>
<!--여기 로그인 안했을때 html코드 넣어-->

<!--여기까지-->
<?php
}
else{
?>
<!--여기 로그인 했을때 html코드 넣어-->

<!--여기까지-->
<?php
    }
     ?>