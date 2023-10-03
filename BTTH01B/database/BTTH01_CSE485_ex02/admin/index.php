

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ (Admin)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


</head>
<body>
    <div class="container-fluid">
        <?php include '../layout/nav-header.php' ?>

        <div class="main d-flex justify-content-around" style="margin-bottom: 50px; margin-top: 50px;">
            <div class="user border" style="width: 22%; height:auto; text-align:center;">
                <span class="text-primary">Người dùng</span>
                <p class="text" style="font-size: 30px; ">110</p>
            </div>
            <div class="user border " style="width: 22%; height:auto; text-align:center;">
                <span class="text-primary">Thể loại</span>
                <p class="text" style="font-size: 30px;">10</p>
            </div>
            <div class="user border " style="width: 22%; height:auto; text-align:center;">
                <span class="text-primary">Tác giả</span>
                <p class="text" style="font-size: 30px;">20</p>
            </div>
            <div class="user border " style="width: 22%; height:auto; text-align:center;">
                <span class="text-primary">Bài viết</span>
                <p class="text" style="font-size: 30px;">110</p>
            </div>
        </div>
        <?php 
            include '../layout/end.php'
        ?>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">

</script>
</body>
</html>