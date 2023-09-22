<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
</head>
<body>
    <?php
        $arrs = ['đỏ', 'xanh', 'cam', 'trắng']
    ?>
    <p>
        Màu <span style="color: red;"><?php echo $arrs[0]?></span> là màu yêu thích của Anh,
        <span style="color: red;"><?php echo $arrs[3]?></span> là màu yêu thích của Sơn,
        <span style="color: red;"><?php echo $arrs[2]?></span> là màu yêu thích của Thắng,
        còn màu yêu thích của tôi là màu <span style="color: red;"><?php echo $arrs[3]?></span>
    </p>
</body>
</html>