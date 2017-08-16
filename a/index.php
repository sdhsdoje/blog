<?php
session_start();
$url=$_SERVER['PHP_SELF'];
$surl=explode('/',$url);
$id=$surl[2];

if($_SESSION['name']==$id){
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
        </div>
        <div id="content3">     
            <section>
               <?php
        $con=mysqli_connect("localhost","root","kjh","project");
        $query="select * from board where name='$id'";
        $info=mysqli_query($con,$query);
        while($re=mysqli_fetch_array($info)){
                ?>
                <div id="st">
                    <a href="<?php echo '../view.php?idx='.$re['idx'] ?>">
                        <h1><?php echo $re['title'] ?></h1>
                        <h5><?php echo $re['content'] ?></h5>
                    </a>
                </div>
                <?php
        }
    ?>
            </section>
            <article>
                <a href="../write.html" id="button">글쓰기</a>

            </article>
        </div>
        <footer>
           <br><br>
            center this is KJH!
        </footer>
    </div>
</body>
</html>
    <?php
}
else
{
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
        </div>
        <div id="content3">     
            <section>
               <?php
        $con=mysqli_connect("localhost","root","kjh","project");
        $query="select * from board where name='$id'";
        $info=mysqli_query($con,$query);
        while($re=mysqli_fetch_array($info)){
                ?>
                <div id="st">
                    <a href="<?php echo '../view.php?idx='.$re['idx'] ?>">
                        <h1><?php echo $re['title'] ?></h1>
                        <h5><?php echo $re['content'] ?></h5>
                    </a>
                </div>
                <?php
        }
    ?>
            </section>
        </div>
        <footer>
           <br><br>
            center this is KJH!
        </footer>
    </div>
</body>
</html>
<?php
}
?>