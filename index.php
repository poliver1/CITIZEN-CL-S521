<?php

//LABEL GENERATOR
//URL = http://localhost/labels/index.php?title=title&company=company&address=address&city=city&postcode=postcode

$test     = fopen("LABEL", "w");
$hex_1    = pack("H*", '024D333030300263303030300265024F303232300266323930026E0261024C443131504953494831320D2020200D313631314133363032373030303533');
$title    = $_GET['title'];
$hex_2    = pack("H*", '0D313631314133363032333030303533');
$company  = $_GET['company'];
$hex_3    = pack("H*", '0D313631314133363031393030303533');
$address  = $_GET['address'];
$hex_4    = pack("H*", '0D313631314133363031353030303533');
$city     = $_GET['city'];
$hex_5    = pack("H*", '0D313631314133363031313030303533');
$postcode = $_GET['postcode'];
$hex_6    = pack("H*", '0D0D45');
fwrite($test, $hex_1.$title.$hex_2.$company.$hex_3.$address.$hex_4.$city.$hex_5.$postcode.$hex_6);
fclose($test);
