<?php
$serverinimi="localhost";
$kasutajanimi="irinamerkulova";
$parool="123456";
$andmebaas="irinamerkulova";
$yhendus=new mysqli($serverinimi, $kasutajanimi, $parool, $andmebaas);
$yhendus->set_charset('UTF8');


