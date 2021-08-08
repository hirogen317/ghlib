<?php

require './vendor/autoload.php';

use GeoIp2\Database\Reader;

$reader = new Reader('./GeoLite2-Country.mmdb');

$abeshi = $reader->country('128.101.101.101');

var_dump($abeshi->country->isoCode);
var_dump($abeshi->country->name);
var_dump($abeshi->country->names['ja']);
