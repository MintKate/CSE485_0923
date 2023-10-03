

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
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/root.css">
    <link rel="stylesheet" href="../css/formSearch.css">
    <link rel="stylesheet" href="../css/menu_right.css">
    <link rel="stylesheet" href="../css/main_content.css">


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
                include '../layout/sidebar.php'
            ?>
            

            <div class="col-md-8 main ">
                <div class="header d-flex justify-content-between px-2 py-2 sticky-top">
                    <div class="menu-bar">
                        <i class="h3 bi bi-list"></i>
                        <span class="h3 px-3" style="font-family: Poppins, san-serif;">Add user</span>
                    </div>
                    
                        
                </div>

                
                <div class="main-content">
                    
                    <?php
                        if(isset($_GET['error'])){
                            echo "<p style='background-color:orange'>{$_GET['error']}</p>";
                        }
                    ?>
                    <div class="form d-flex justify-content-center">
                        <form action="process_user_add.php" method="post">
                            <div class="row input-group mb-3">
                                <div class="col-md-4 ">
                                    Username
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="user" id="" class="form-control">
                                </div>
                            </div>
                            <div class="row input-group mb-3">
                                <div class="col-md-4 ">
                                    Email
                                </div>
                                <div class="col-md-8">
                                    <input type="email" name="mail" id="" class="form-control">
                                </div>
                            </div>
                            <div class="row input-group mb-3">
                                <div class="col-md-4 ">
                                    Password
                                </div>
                                <div class="col-md-8">
                                    <input type="password" name="pass1" id="" class="form-control">
                                </div>
                            </div>
                            <div class="row input-group mb-3">
                                <div class="col-md-5 ">
                                    Re-type Password
                                </div>
                                <div class="col-md-8">
                                    <input type="password" name="pass2" id="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-success" name="sbmSave">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>

            <?php
                    include '../layout/menu_right.php'
            ?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../js/click_Menu.js"></script>
</body>
</html>