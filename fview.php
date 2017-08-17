<?php
session_start();
$idx=$_GET['idx'];
$con=mysqli_connect("localhost","root","kjh","project") or die("fail connect");
$query="select * from forum where idx='$idx'";
$info=mysqli_query($con,$query);
$re=mysqli_fetch_array($info);
?>
 <!DOCTYPE HTML>

 <html>

    <head>
    	

        <meta charset="utf-8">


        

        <title><?php echo $re['title'] ?></title>

		



        <!-- style -->

        <link href="view.css" rel="stylesheet" type="text/css">

       
	</head>



    <body>

    

    	<!-- header -->

        	<header role="header">

            	<div class="container">
                    <h1>

                        	<img src="HOME_LOGO.png">

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
                    
                    $query="select * from forum_comment where idx='$idx'";
                    $info=mysqli_query($con,$query) or die("Fail query");
                    ?>
                <div class="comments-pan">

                	

                    <ul class="comments-reply">

                    	<li>

                        	

                            <section>
                                댓글
                                <h4><?php $re['name']; ?><form action="forumcomment.php" method="POST">
				<input type="hidden" name="idx" value=<?=$idx ?>>
				<input type="text" name="name" placeholder="name">
				<br>
                                <input type="text" name="content" placeholder="content"><br>
				<input type="password" name="pw" placeholder="Password">
				<input type="submit">
				</form></h4>
                                
                                

                               <?php
                                while($re=mysqli_fetch_array($info)){
				    echo "<h2>".$re['name']."</h2>";
                                    echo $re['content']."&nbsp";
					?>
					<script>
					        function del(no){
        					var pw=prompt("비밀번호를 입력하세요");
        					location.href="deletefcomment.php?no="+no+"&pw="+pw;
        					}
        					function edit(no){
        					var pw=prompt("비밀번호를 입력하세요.");
						var msg=prompt("수정할 글을 입력해주세요.");
        					location.href="editfcomment.php?no="+no+"&pw="+pw+"&msg="+msg;
        					}
        					function test(){
        					alert("test");
        				}
					</script>
					<a href="javascript:void(0);" onclick="edit(<?=$re['no']?>)">수정</a>&nbsp
					<a href="javascript:void(0);" onclick="del(<?=$re['no']?>)">삭제</a><br><hr>
                                	<?php
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
