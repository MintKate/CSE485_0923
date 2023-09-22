<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 12</title>
</head>
<body>
    <?php
    // Cho mảng sau:
    $numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
    ];
    echo '<br>';
    // ❖ Lấy ra phần tử đầu tiên, phần tử cuối cùng trong mảng trên
    $firstElement = reset($numbers);
    $lastElement = end($numbers);
    echo " [
        'key1' => 12,
        'key2' => 30,
        'key3' => 4,
        'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
        ] ".'<br><br>';
    echo 'Phần tử đầu tiên trong mảng trên là: '.$firstElement.'<br><br>';
    echo 'Phần tử cuối cùng trong mảng trên là: '.$lastElement.'<br><br>';    
    
    // ❖ Tìm số lớn nhất, số nhỏ nhất, tổng các giá trị từ mảng trên
    $maxValue = max($numbers);
    $minValue = min($numbers);
    $sumValueArray = array_sum($numbers);
    echo 'Số lớn nhất trong mảng trên là: '.$maxValue.'<br><br>';
    echo 'Số nhỏ nhất trong mảng trên là: '.$minValue.'<br><br>';
    echo 'Tổng các giá trị từ mảng trên là: '.$sumValueArray.'<br><br>';

    // ❖ Sắp xếp mảng theo chiều tăng, giảm các giá trị
    asort($numbers); //sap xep tang dan theo gia tri
    echo 'Mảng đã sắp xếp tăng dần theo giá trị: '.'<br>';
    print_r($numbers);
    
    echo '<br><br>';
    rsort($numbers); //sap xep giam dan theo gia tri
    echo 'Mảng đã sắp xếp giảm dần theo giá trị: '.'<br>';
    print_r($numbers);

    
    // ❖ Sắp xếp mảng theo chiều tăng, giảm các key

    echo '<br><br>';
    ksort($numbers); //sap xep giam dan theo key
    echo 'Mảng đã sắp xếp giảm dần theo key: '.'<br>';
    print_r($numbers);

    echo '<br><br>';
    krsort($numbers); //sap xep giam dan theo key
    echo 'Mảng đã sắp xếp giảm dần theo key: '.'<br>';
    print_r($numbers);    
    ?>
</body>
</html>