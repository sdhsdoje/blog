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
<style>
    #login,#signup
    {display: none;}
</style>
<!--여기까지-->
<?php
    }
     ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>D_STORY</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
    <div id="wrap">
        <header>
                <a href="#"><img id="logo_d" src="./img/logo_d.png" alt="logo"></a>
                <form id="search" action="search.php" method="POST">
                    <input type="text" name="search" id="search_text" placeholder="         검색">
                    <!--<input type="submit" value="search" id="search_submit">-->
                </form>
            <a href="#" id="login">LOGIN</a>
            <a href="#" id="signup">SIGNUP</a>
        </header>
        <ul class="mousewheel">
            <li id="content1"><!--홈-->
                <img id="main_image1" src="./img/main_image1.jpg" alt="main_image1">
                <img id="logo" src="./img/logo.png" alt="logo">
            </li>
            <li id="content2"><!--포럼-->
                <div id="forum">FORUM</div>
                <a href="#" id="forum_link">GO!</a>
            </li>
            <li id="content3"><!--블로그 결산-->
                <div id="blog_settle">BLOG SETTLE</div>
                <a href="#" id="blog_settle_link">GO!</a>
            </li>
        </ul>
        <footer>
            <div id="footer_text">서울특별시 용산구 회나무로 15길 서울디지텍고등학교
			<p>Tel. 010-4539-4103</p>
			<p>Fax. 02-1234-5678</p>
			<span>사업자 등록번호 : 211-88-39442 | 대표이사 : 김종현</span><br>
			<span>Copyright 2016 © Seoul Digitech High School Co., Ltd</span>
			 <br> <br>
			</div>
        </footer>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery-ui.min.js"></script>
<script type="text/javascript" src="./js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="./js/jquery.mousewheel.js"></script>
<script src="js/js.js"></script>
</html>
