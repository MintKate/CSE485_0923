<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3CMS</title>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- jquery lib -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    
    <!-- css -->
    <link rel="stylesheet" href="./css/sidebar.css">
    <link rel="stylesheet" href="./css/root.css">
    <link rel="stylesheet" href="./css/menu_right.css">
    <link rel="stylesheet" href="./css/formSearch.css">

    <style>
    .logo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
  </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php
                include './layout/sidebar.php'
            ?>
            <div class="col-md-8 main ">
                <div class="header d-flex justify-content-between px-2 py-2 sticky-top">
                    <div class="menu-bar">
                        <i class="h3 bi bi-list"></i>
                        <span class="h3 px-3" style="font-family: Poppins, san-serif;">Dashboard</span>
                    </div>
                    <?php
                        include './layout/formSearch.php'
                    ?> 
                        
                </div>
                
                <div class="main-content ">
                    <div class="news d-flex justify-content-between px-2 py-2">
                        <div class="pic1 px-2 py-2">
                            <img src="./images/pic1.png" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="pic1 px-2 py-2">
                            <img src="./images/pic2.png" class="img-fluid" alt="Responsive image">
                        </div>   
                    </div>

                    <div class="news1 d-flex justify-content-between">
                        <div class="pic2 px-2 py-2">
                            <img src="./images/pic3.png" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="pic2 px-2 py-2">
                            <img src="./images/pic4.png" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="pic2 px-2 py-2">
                            <img src="./images/pic5.png" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                    
                    <div class="news3 d-flex justify-content-between">
                        <img src="./images/pic6.png" class="img-fluid" alt="Responsive image">
                    </div>

                    <div class="new4 d-flex justify-content-between">
                        <div class="pic3 px-2 py-2">
                            <img src="./images/pic7.png" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="pic3 px-2 py-2">
                            <img src="./images/pic8.png" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>
            </div>

            <?php
                include './layout/menu_right.php'
            ?>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../admin/js/click_Menu.js"></script>
</body>
</html>