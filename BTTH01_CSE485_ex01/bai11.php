<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 11</title>
</head>
<body>
    <?php
// Cho mảng $array = array(1, 2, 3, 4, 5);
// Thực hiện xóa phần tử thứ 3 trong mảng trên, sau khi xóa hãy đảm bảo key của mảng
// là tuần tự
// Ví dụ:
// Mảng ban đầu
// array (size=5)
// 0 => int 1
// 1 => int 2
// 2 => int 3
// 3 => int 4
// 4 => int 5
// sau khi xóa phần tử thứ 3 sẽ có kết quả như sau
// array (size=4)
// 0 => int 1
// 1 => int 2
// 2 => int 3
// 3 => int 5

    $array = array(1, 2, 3, 4, 5);
// xoa phan tu thu 3
// cach1
    array_splice($array, 2, 1);

// cach 2
    // unset($array[3])

// sap xep lai mang
    $array = array_values($array);
    print_r($array);
    ?>
</body>
</html>