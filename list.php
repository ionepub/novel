<?php
$url ="http://www.biquge.la/book/1/";
$content = file_get_contents($url);
// echo $content;
$content=str_replace(array("\r","\n","\t","\s"), '', $content);
preg_match('/<div id="list"><dl>(.*?)<\/dl><\/div>/si',$content,$matches);
// var_dump($matches);
$re = $matches[1];
preg_match_all('/<dd><a href="(.*?)">(.*?)<\/a><\/dd>/si', $re, $result);
// var_dump($result);
$result_title = $result[2];
$result_url = $result[1];
// print_r($result_url);


/*$temp = explode('<div id="list">', $content);
$temp = $temp[1];
$temp = explode('</div>', $temp);
$temp = $temp[0];
// echo $temp;
$titles = explode("</a></dd>", $temp);
// print_r($titles);
unset($titles[count($titles)-1]);
$titles_arr = array();
$url_arr = array();
foreach ($titles as $key => $value) {
	$temp_title = explode('">', $value);
	$temp_url = $temp_title[0];
	$temp_url = explode('="', $temp_url);
	$temp_url = $temp_url[1];
	$url_arr[] = $url.$temp_url;
	$temp_title = $temp_title[1];
	$titles_arr[] = $temp_title;
}
// print_r($titles_arr);
// print_r($url_arr);
*/

