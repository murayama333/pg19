<?php
$file = "message.txt";
$text = file_get_contents($file);
echo substr($text, 0, 11);
