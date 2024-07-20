<?php
$url = "https://google.com";
$arrUrl = parse_url($url);
print_r($arrUrl);

$url = "https://www.udemy.com/course/php-do-zero-a-maestria-com-projetos-incriveis/learn/lecture/23220964#content";
$arrUrl = parse_url($url);
echo "<br><br>Nova URL <br><br>";
print_r($arrUrl);