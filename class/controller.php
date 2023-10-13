<?php

include "Uploader.php";

$uploader = new Uploader();

$successFiles =  $uploader->upload();
print_r($successFiles);