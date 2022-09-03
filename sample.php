<?php
header('Content-Type: text/xml');


$json = json_encode((array)simplexml_load_string($xml)),1);
echo $json;

?>
