<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 13</title>
</head>
<body>
    <?php
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    // ❖ Tính toán giá trị trung bình của mảng trên
    echo 'Mảng [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73] <br><br>';
    $n = count($numbers);
    $averrage = array_sum($numbers)/$n;
    $result = round($averrage, 4); //lam tron den so thap phan thu 2
    echo "Giá trị trung bình của mảng trên là: ".$result."<br><br>";

    // ❖ Liệt kê các số có giá trị lớn hơn giá trị trung bình đó
    echo 'Các số có giá trị lớn hơn giá trị trung bình: ';
    foreach ($numbers as $value){
        if($value > $result){
            echo $value.' ';
        }
    }
    // ❖ Liệt kê các số có giá trị nhỏ hơn hoặc bằng giá trị trung bình đó
    echo '<br><br>Các số có giá trị nhỏ hơn hoặc bằng giá trị trung bình: ';
    foreach ($numbers as $value){
        if($value <= $result){
            echo $value.' ';
        }
    }
    ?>
</body>
</html>