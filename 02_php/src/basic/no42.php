<?php
$file = "devices.txt";
$str = file_get_contents($file);
echo strtoupper($str);
