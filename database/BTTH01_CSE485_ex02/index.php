<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <link rel="stylesheet" href="css/layout.css">
    
    <style>
        
        .flex-container{
            display: flex;
            flex-wrap: wrap;
        }

        .flex-item{
            width: 250px;
            height: auto;
            margin: 10px;
        }   

    </style>
</head>
<body>
    <div class="container-fluid">
        <?php include 'layout/header.php' ?>

        <div class="banner">
            <img width="100%" height="auto" src="./image/bg1.png" alt="">
        </div>
        <div class="main">
            <p class="text-info " style="font-size: 20px; text-align:center;">TOP BÀI HÁT YÊU THÍCH</p>
            <div class="flex-container ">
                <div class="flex-item">
                    <a href="detail.php" id=#>
                        <img width="100%" height="auto" src="image/pic1.png" alt="">
                        <p class="text-info" style="text-align: center;" >Cây, lá và gió</p>
                    </a>   
                </div>
                
                <div class="flex-item">
                    <a href="detail.php" id=#>
                        <img width="100%" height="auto" src="image/pic2.png" alt="">
                        <p class="text-info" style="text-align: center;" >Cuộc sống mến thương</p>
                    </a>   
                </div>

                <div class="flex-item">
                    <a href="detail.php" id=#>
                        <img width="100%" height="auto" src="image/pic3.png" alt="">
                        <p class="text-info" style="text-align: center;" >Lòng mẹ</p>
                    </a>   
                </div>


                <div class="flex-item">
                    <a href="detail.php" id=#>
                        <img width="100%" height="auto" src="image/pic4.png" alt="">
                        <p class="text-info" style="text-align: center;" >Phôi pha</p>
                    </a>   
                </div>

                
                <div class="flex-item">
                    <a href="detail.php" id=#>
                        <img width="100%" height="auto" src="image/pic5.png" alt="">
                        <p class="text-info" style="text-align: center;" >Nơi tình yêu bắt đầu</p>
                    </a>   
                </div>
                
            </div>
            <?php include 'layout/end.php' ?>
           
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">

    </script>
</body>
</html>