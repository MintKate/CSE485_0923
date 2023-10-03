
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
</head>
<body>
    <?php
        $arrs=[2,5,6,9,2,5,6,12,5];
        $tong= array_sum($arrs);
        $tich = array_product($arrs);
        $hieu = $arrs[0];
        $thuong = $arrs[0];
        $n = count($arrs);
        for($i = 1; $i<$n; $i++ ){
            $hieu -= $arrs[$i];
            (float)$thuong /= $arrs[$i];
        }

        echo 'Tổng các phần tử = '.implode(" + ", $arrs).' = '.$tong.'<br>';
        echo 'Tích các phần tử = '.implode(" * ", $arrs).' = '.$tich.'<br>';
        echo 'Hiệu các phần tử = '.implode(" - ", $arrs).' = '.$hieu.'<br>';
        echo 'Thương các phần tử = '.implode("/", $arrs).' = '.$thuong.'<br>';
?>
<!-- E:\Documents\63HT1\CN_Web\nginx-1.24.0\html\github\CSE485_0923\BTTH01_CSE485_ex01\bai1.php -->
</body>
</html>