<?php
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
    );
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
    );
    // Hãy tạo mảng thứ 3 từ 2 mảng trên, mảng kết quả là mảng sau:
    // $keysAndValues = array(
    // "first"=>"dinosaur",
    // "second"=>"pig",
    // "third"=>"platypus"
    // );

$keysAndValues = array_combine($keys, $values); //array_combine la ham ket hop value cua 2 mang
print_r($keysAndValues) //in noi dung mang
?>