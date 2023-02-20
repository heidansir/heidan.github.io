<?php
$file_path = "qunhao.txt";
if(file_exists($file_path)){
$str = file_get_contents($file_path);
$str = str_replace("\r\n","<br />",$str);
$jqstr = explode("@", $str);
$jqurl = array_filter($jqstr);
shuffle($jqurl);
$num_x = count($jqurl);
$num = rand(0,$num_x - 1);
}
header("location:{$jqurl[$num]}");
?>