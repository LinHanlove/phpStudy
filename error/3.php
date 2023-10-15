<?php
use Core\Error;

include '2.php';
include '4 .php';

(new Error(false)) -> error();

echo $a;
include $a;