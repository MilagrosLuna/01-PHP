<?php
/*Aplicación No 11 (Carga aleatoria)
Imprima los valores del vector asociativo siguiente usando la estructura de control foreach:
$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';*/

$vec_asoc = array(1 => 90,30 => 7 ,'e' => 99,'hola' => 'mundo');
//$v[1]=90; 
//$v[30]=7; 
//$v['e']=99; 
//$v['hola']= 'mundo';
//var_dump($v);
foreach($vec_asoc as $item)
{
    echo $item . "<br>";
}