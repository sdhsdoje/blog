<?php
session_start();
$url=$_SERVER['PHP_SELF'];
$surl=explode('/',$url);
$id=$surl[2];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title><?php echo $id."님의 블로그"?></title>
    <link rel="stylesheet" href="../css/cssb.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body>
    <div id="wrap">
        <header>
             
        </header>
        <div id="content">
            
        </div>
        <div id="content2">
            <div id="blog_name">
                <?php echo $id ?>
            </div>
            <ul>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
            </ul>
        </div>
        <div id="content3">     
            <section>
                <div id="st">
                    <a href="#">
                        <h1>3</h1>
                        <h5>내용</h5>
                    </a>
                </div>
                <div id="nd">
                    <a href="#">
                        <h1>2</h1>
                        <h5>내용</h5>
                    </a>
                </div>
                <div id="rd">
                    <a href="#">
                        <h1>1</h1>
                        <h5>내용</h5>
                    </a>
                </div>
            </section>
            <article>
                <div id="list">
                    <strong>최근 글</strong><br>
                    
                </div>
            </article>
        </div>
        <footer>
           <br><br>
            center this is KJH!
        </footer>
    </div>
</body>
</html>
