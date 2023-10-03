<?php
//bien sieu toan cuc GET
if(isset($_GET['id'])){
    $uid = $_GET['id'];
    $sql = "SELECT * FORM users WHERE id='uid' ";
}
?>

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
    <link rel="stylesheet" href="./index.css">

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
            <div class="col-md-9 main ">
                <div class="header d-flex justify-content-between px-2 py-2">
                    <div class="menu-bar">
                        <i class="h3 bi bi-list"></i>
                        <span class="h3 px-3" style="font-family: Poppins, san-serif;">Users</span>
                    </div>
                    <?php
                        include './layout/header.php'
                    ?> 
                </div>

                <div class="main-content vh-100 p-2">
                    <h3 class="text-center text-danger" style="font-family: sans-serif, Poppins;" >Add a New User</h3>
                    <label for="name" id='user'>User name</label>
                    <input type="text" id='user'> <br>
                    <label for="name" id='pass'>Password</label>
                    <input type="text" id='pass'> <br>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        
    </script>
</body>
</html>