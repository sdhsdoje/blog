<?php
session_start();
$idx=$_GET['idx'];
$con=mysqli_connect("localhost","root","kjh","project");
$query="select * from board where idx=$idx";
$info=mysqli_query($con,$query);
$re=mysqli_fetch_array($info);
if($_SESSION['name']!=$re['name']){
    ?>
<script>
alert("부적절한 침입 감지");
location.href="index.php"
</script>
<?php
    exit();
}
$special_pattern = "/[`~!@#$%^&*|\\\'\";:\/?^=^+_()<>]/";
if(preg_match($special_pattern, $idx) ){
    ?>
<script>
    alert("부적절한 침입 감지");
   location.href=<?php echo $hash_id+"/index.php" ?>;
    </script>
<?php
    exit();
}
$con=mysqli_connect("localhost","root","kjh","project") or die ("fail to connect");
$query="select * from board where idx='$idx'";
$info=mysqli_query($con,$query);
$result=mysqli_fetch_array($info);
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
    <meta charset=utf-8>
    <link href="write.css" rel="stylesheet" type="text/css">
    </head>
    <title>글수정</title>

    <body>
    <img src="HOME_LOGO.png" width="180px" height="60px">
    <div class="title">
    <form action="editb.php" method="POST">
	<input type="hidden" name="idx" value='<?php echo $idx ?>'>
    <textarea class="textarea" name="title" rows="2" cols="100"><?php echo $result['title'] ?></textarea>
    </div>
        <div class="content">
            <textarea class="textarea" name="content" cols="100" rows="50"><?php echo $result['content'] ?></textarea>
        </div>
        <div class="uploadbutton">
        <div class="uploadbutton">
       <input type="submit" value="글수정">
        </div>
        </div>
        </form>
        <footer>
            <div id="footer_text">서울특별시 용산구 회나무로 15길 서울디지텍고등학교
                        <p>Tel. 010-4539-4103</p>
                        <p>Fax. 02-1234-5678</p>
                        <span>사업자 등록번호 : 211-88-39442 | 대표이사 : 김종현</span><br>
                        <span>Copyright 2016 © Seoul Dgitech High School Co., Ltd</span>
                         <br> <br>
                        </div>
        </footer>

    </body>
</html>
