<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 8</title>
</head>
<body>
    <?php
// Tìm chuỗi có độ dài lớn nhất, nhỏ nhất và độ dài tương ứng đó từ mảng sau:
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
// Kết quả mong đợi:
// Chuỗi lớn nhất là program is PHP, độ dài = 14
// Chuỗi lớn nhất là is, độ dài = 2

    $longestString = '';
    $shortestString = '';
    $maxLenght = 0;
    $minLenght = 100;
    foreach($array as $string){
        $length = strlen($string);
        if($length > $maxLenght){
            $maxLenght = $length;
            $longestString = $string;
        }
        elseif($length < $minLenght){
            $minLenght = $length;
            $shortestString = $string;
        }
    }

    echo 'Chuỗi lớn nhất là '.$longestString.' , độ dài = '.$maxLenght.'<br>';
    echo 'Chuỗi nhỏ nhất là '.$shortestString.' , độ dài = '.$minLenght;
    ?>
</body>
</html>