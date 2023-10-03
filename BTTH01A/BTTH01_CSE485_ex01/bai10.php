<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 10</title>
</head>
<body>
    <?php
// Viết hàm chuyển toàn bộ các ký tự trong mảng số nguyên thành mảng các ký tự
// hoa. Cần print_r hoặc var_dump mảng ra màn hình kiểm tra
// Ví dụ: mảng 1 có các phần tử [‘a’, ‘b’, ‘ABC’] sau khi chuyển sẽ là [‘A’, ‘B’, ‘ABC’]
// Áp dụng với 1 số mảng sau:

function convertToUpper($item){
    return is_string($item) ? strtoupper($item) : $item;
}

$arrs1 = ['1', 'b', 'c', 'd'];

$result1 = array_map('convertToUpper', $arrs1);
echo "['1', 'b', 'c', 'd'] =>  ".implode(' ,', $result1).'<br>';
// print_r($result1);
// var_dump($result1);

$arrs2 = ['a', 0, null, false];
$result2 = array_map('convertToUpper', $arrs2);
echo "['a', 0, null, false] => ".implode(' ,', $result2);
    ?>
</body>
</html>