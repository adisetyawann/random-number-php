<?php

require_once 'vendor/autoload.php';

$rand = new RandomNumber\Generate();
echo json_encode($rand->int());
