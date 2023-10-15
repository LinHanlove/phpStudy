<?php

$res = imagecreatefromjpeg('01.jpg');

var_dump($res);

echo imagesx($res); 