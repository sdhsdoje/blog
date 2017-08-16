<?php
session_start();
$idx=$_GET['idx'];
$con=mysqli_connect("localhost","root","kjh","project") or die("fail connect");
$query="select * from bard where idx='$idx'";
$info=mysqli_query($con,$query);
$re=mysqli_fetch_array($info);
?>
 <!DOCTYPE HTML>

 <html>

    <head>

    	

        <meta charset="utf-8">


        

        <title>글보기</title>

		



        <!-- style -->

        <link href="view.css" rel="stylesheet" type="text/css">

       
	</head>



    <body>

    

    	<!-- header -->

        	<header role="header">

            	<div class="container">
                    <h1>

                        	<img src="../HOME_LOGO.png">

                        </h1>
                </div>

            </header>


        <main role="main-inner-wrapper" class="container">
            	<div class="blog-details">

                	<article class="post-details" id="post-details">

                        <header role="bog-header" class="bog-header text-center">

                            <h3><span><?php echo $re['time']; ?></span></h3>

                            <h2> <?php echo $re['content']; ?></h2>

                        </header>

                        

                        

                        <div class="enter-content">

                            <?php
                            echo $re['title'];
                            ?>

                        </div>

                	</article>

                    

             <!--덧글-->
<?php
                    
                    $query="select * from board_comment where idx='$idx'";
                    $info=mysqli_query($con,$query) or die("Fail query");
                    ?>
                <div class="comments-pan">

                	

                    <ul class="comments-reply">

                    	<li>

                        	

                            <section>
                                댓글
                                <h4><?php $re['name']; ?><form action="commendboard.php" method="POST"><input type="text" name="name"><br>
                                <input type="text" name="content"><br><input type="password" name="pw"><input type="submit"></form></h4>
                                
                                

                               <?php
                                while($re=mysqli_fetch_array($info)){
                                    echo $re['content'];
                                }
                                ?>
                                
                            </section>

							

                    </ul>

                    

                    
                    

                </div>

                    

                </div>

                

               

            

        </main>

    	
        <!-- footer -->

        <footer role="footer">
            <div id="footer_text">서울특별시 용산구 회나무로 15길 서울디지텍고등학교
			<p>Tel. 010-4539-4103</p>
			<p>Fax. 02-1234-5678</p>
			<span>사업자 등록번호 : 211-88-39442 | 대표이사 : 김종현</span><br>
			<span>Copyright 2016 © Seoul Digitech High School Co., Ltd</span>
			 <br> <br>
			</div>
           
        </footer>

        <!-- footer -->

    

       
    </body>

</html>