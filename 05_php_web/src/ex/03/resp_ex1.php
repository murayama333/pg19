<?php
$file = "sample.jpg";
header("Content-Type: image/jpg");
echo file_get_contents($file);
