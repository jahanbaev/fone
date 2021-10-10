<?php
$idns = $_GET['q'];
$json = file_get_contents("https://pixabay.com/api/?key=21316344-e388d7251aabde560038eccae&image_type=photo&pretty=false&per_page=40&q=".$idns);
echo $json;
?>