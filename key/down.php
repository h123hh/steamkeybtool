<?php
$time = time();
$text = $_POST["text"];
$myfile = fopen("../keytxt/".$time.".txt", "w") or die("Unable to open file!");
fwrite($myfile, $text);
fclose($myfile);
$fileName = "../keytxt/".$time.".txt"; //得到文件名
header( "Content-Disposition:  attachment;  filename=".$fileName); //告诉浏览器通过附件形式来处理文件
header('Content-Length: ' . filesize($fileName)); //下载文件大小
readfile($fileName);  //读取文件内容
?>