<?php
$cards1 = ["J", "Q", "K", "A"];
$cards2 = ["Q", "K", "A"];
$cards = array_diff($cards1, $cards2);
print_r($cards);

