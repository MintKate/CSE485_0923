<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 14</title>
</head>
<body>
    <?php
// Gộp 2 mảng sau dựa theo key của từng mảng
$array1 = [[77, 87],[23, 45]];
$array2 = ['giá trị 1', 'giá trị 2'];
// Kết quả mong đợi:
// [0 => ['giá trị 1',77,87],
// 1 => ['giá trị 2',23,45,]]

    $result = [];
    for($i=0; $i<count($array1); $i++){
        $result[$i] = array_merge([$array2[$i]],[$array1[$i]]); 
        // array_merge($a, $b); ham ket hop value cua mang
    }

    print_r($result);

    ?>
</body>
</html>