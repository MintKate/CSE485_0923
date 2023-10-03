<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 5</title>
</head>
<body>
    <?php
        $a = [
            'a' => ['b' => 0,'c' => 1],
            'b' => ['e' => 2,'o' => ['b' => 3]]
            ];
        
        $value1 = $a['b']['o']['b']; //mang con long nhau
        $value2 = $a['a']['c'];
        $value3 = $a['a'];
        // print_r($value3); //// print_r($value); hàm hiện phần tử dạng mảng
        ?>
        Giá trị có key là b từ mảng trên là <?= $value1?> <br>
        Giá trị có key là c từ mảng trên là <?= $value2?> <br>
        Thông tin của key 'a' là <?php print_r($value3); ?>

</body>
</html>