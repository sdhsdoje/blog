<?php
session_start();
$con=mysqli_connect("localhost","root","kh","project") or die("fail to connect");
$query="select * from forum";
$info=mysqli_query($con,$query);
for($result=mysqli_fetch_array($info))
{
    $idx=$result['idx'];
    $time=$result['time'];
    $title=$result['title'];
    $name=$result['name'];
    echo $idx+"<br>";
    echo $time+"<br>";
    echo $title+"<br>";
    echo $name+"<br>";
}
?>