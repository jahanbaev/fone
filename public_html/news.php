<?php

$xml = file_get_contents("https://gnews.io/api/v4/top-headlines?lang=ru&token=6dcd3c8cadfa4aeb78a8d34bda910ead"); 
echo $xml ;
file_put_contents('tmp.txt',$xml);
curl_close($ch);
?>

