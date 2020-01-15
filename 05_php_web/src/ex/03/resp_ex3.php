<?php
$value = [];
$value["date"] = date("Y-m-d H:i:s");
$value["fruits"] = ["Apple", "Banana", "Cherry"];

header("Content-type: application/json");
$json_contents = json_encode($value);
echo $json_contents;