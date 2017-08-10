<?php
     $nameFrom  = "D_STROY";
    $mailFrom = "wldnro3141@naver.com";
    $nameTo  = "고갱님";
    $mailTo = "wldnro3141@gmail.com";
    $subject = "D_STROY 블로그에 초대되셨습니다!";
    $content = "아래 링크를 클릭하시면 D_STROY에 가입하실수 있습니다. <br><a href='sdhsdoje.kro.kr'D_STORY가입</a>";    

    

    $charset = "UTF-8";


    $nameFrom   = "=?$charset?B?".base64_encode($nameFrom)."?=";
    $nameTo   = "=?$charset?B?".base64_encode($nameTo)."?=";
    $subject = "=?$charset?B?".base64_encode($subject)."?=";

    $header  = "Content-Type: text/html; charset=utf-8\r\n";
    $header .= "MIME-Version: 1.0\r\n";

    $header .= "Return-Path: <". $mailFrom .">\r\n";
    $header .= "From: ". $nameFrom ." <". $mailFrom .">\r\n";
    $header .= "Reply-To: <". $mailFrom .">\r\n";

    $result = mail($mailTo, $subject, $content, $header, $mailFrom);

    if(!$result) {
 ?>

        <script>
                alert('메일전송실패!!! \n 다시 작성하세요');
        </script>

 <?php
    } else {
 ?>

        <script>
                alert('메일전송성공!!!');
        </script>

 <?php
    }
 ?>
