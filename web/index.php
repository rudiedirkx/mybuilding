<?php

header('Content-type: text/plain; charset=utf-8');

$host = $_SERVER['HTTP_HOST'];

list($zipcode, $country, ) = explode('.', $host);

var_dump($country, $zipcode);

