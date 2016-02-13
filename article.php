<?php
$url = "http://www.biquge.la/book/1/260825.html";
$content = file_get_contents($url);

$content=str_replace(array("\r","\n","\t","\s"), '', $content);
// echo $content;exit;
preg_match('/<div id="content">(.*?)<\/div>/si',$content,$matches);
// print_r($matches);
$re = $matches[1];
$re = str_replace('<script>readx();</script>', '', $re);
//将br改为自定义符号
$re = str_replace('<br />', '||||', $re);
$re = strip_tags($re);
//再次转换回br
$re = str_replace('||||', '<br />', $re);
// var_dump($re);
?>