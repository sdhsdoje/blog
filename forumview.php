<?php
session_start();
$idx=$_GET['idx'];
$con=mysqli_connect("localhost","root","kjh","project") or die ("fail to connect");
$query="select * from forum where idx=$idx";
$info=mysqli_query($con,$query);
$result=mysqli_fetch_array($info);
echo htmlspecialchars($result['title']);
echo htmlspecialchars($result['name']);
echo htmlspecialchars($result['time']);
echo htmlspecialchars($result['content']);

$query="select * from forum_comment where idx=$idx";
$info=mysqli_query($con,$query);
for($result=mysqli_fetch_array($info))
{
    $time=$result['time'];
    $title=$result['content'];
    $name=$result['name'];
    echo $time+"<br>";
    echo $content+"<br>";
    echo $name+"<br>";
}
?>