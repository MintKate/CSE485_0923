<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 7</title>
</head>
<body>
<?php

// Tìm và hiển thị tất cả các số từ 100 đến 200 và chia hết cho 5 trong mảng sau:
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
echo '$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0]'.'<br>';
// $n = count($array);
// for($i=0; $i<$n; $i++){
//     if($array[$i] >= 100 && $array[$i] <= 200){
//         $a = 5;
//         $check = $array[$i] % $a;
//         $b = [];
//         if($check==0){
//             $b[$i] = $array[$i];
//             print_r($b);
//         }
//     }
// }

// foreach($b as $value){
//     $a = $value;
// }


echo 'Các số từ 100 đến 200 và chia hết cho 5 trong mảng là: ';
foreach($array as $value){
    if($value >= 100 && $value <=200 && $value % 5 === 0){
        echo $value.' ';
    }
}

?>
</body>
</html>

