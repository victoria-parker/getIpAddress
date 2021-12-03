<?php
function getIpAdress(){
ini_set('date.timezone', 'Europe/Dublin');

$url='http://ip-api.com/xml/?fields=query';

$xml=file_get_contents($url);

if($xml){
    $data=simplexml_load_string($xml);

    if(is_object($data)){
        return $data->query;
    }
}else{
    $date= new DateTime();
    $format=$date->format("Y-m-d H:i:s");
    $fp=fopen("logs/error.log","a+");
    fwrite($fp,"[".$format."]\tError al cargar URL ".$url.PHP_EOL);
    fclose($fp);
    echo "Ha ocurrido un error";
}
}

