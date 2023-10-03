

<?php
// if(isset($_GET['page'])){
//     $page = $_GET['page'];
// }else{
//     $page = 1;
// }

try{
//    Buoc 1: Mo ket noi
    $conn = new PDO("mysql:host=localhost;dbname=test_demo", "root","Kt162003");
    //Buoc 2: Thuc hien truy van
    // $n = ($page -1) * 10;
    // $sql = "SELECT * FROM users ORDER BY created_at DESC LIMIT 10 OFFSET $n";
    $sql = "SELECT * FROM users";
    //    $conn->query($sql);
    // $stmt = $conn->prepare($sql);
    // $stmt->execute();

    //Buoc 3: Xu ly ket qua
    // $users = $stmt->fetchAll();
    $users = $conn->query($sql);
}catch(PDOException $e){
    echo "Error: ".$e->getMessage();
}

// $severname = 'localhost';
// $username = 'root';
// $password = 'Kt162003';
// $dbname = 'test_demo';
// $conn = new mysqli($severname, $username, $password, $dbname);
// if ($conn -> connect_error){
//     die('Kết nối thất bại: ' . $conn->connect_error);
// }

// $sql = "SELECT * FROM users";
// $results = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3CMS</title>
    <!-- boostrap -->
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                        <span class="h3 px-3" style="font-family: Poppins, san-serif;">User</span>
                    </div>
                    <?php
                        include '../layout/formSearch.php'
                    ?> 
                        
                </div>

                
                <div class="main-content">
                    <div class="filer bg-white ps-5 pe-5">
                        <div class="filer-dropdown container-fuild d-flex justify-content-between align-items-center class-pointer pt-4">
                            <div class="nav-item color-primary d-flex align-items-center">
                                <a href="#" class="nav-link fw-bold">Filter</a>
                            </div>
                            
                            <div class="rounded-circle mm-active text-center icon-chevron">
                                <i class="bi bi-chevron-up text-white"></i>
                            </div>
                        </div>
                        <form class="form-group mt-3 d-flex justify-content-between" action="" method="post">
                            <input type="text" id="Email" placeholder="Email" name="Email" class="form-control w-3">
                            <input type="text" id="Mobile" placeholder="Mobile" name="Mobile" class="form-control w-3">
                            <select class="form-select w-3">
                                <option>Select Group</option>
                            </select>
                            <button class="btn btn-filter"><i class="bi bi-search"></i> <span>Filter</span></button>
                            <button class="btn btn-clear">Clear</button>
                        </form>
                    </div>
                    
                    <div class="page bg-white ps-5 pe-5 mt-3">
                        <div class="text-left color-primary fw-bold mb-1 border-bottom pb-2 d-flex justify-content-between">
                            User
                            <div>
                                <a href="../user/user_add.php" class="btn btn-primary">Add user</a>
                                
                                <button class="btn btn-warning">Delete</button>
                            </div>
                        </div>
                        
                        <div class="ShowPage mt-5">
                                <?php
                                    if(isset($_GET['success'])){
                                        $id = $_GET['success'];
                                        echo "<h2 style='color:red'>{$_GET['success']}</h2>";
                                    }
                                ?>
                            <table class="table-user">
                                <thead class="border-bottom">
                                    <tr>
                                        <th><input type="checkbox" class="form-check-input" disabled></th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Detail</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php
                                    foreach($users as $user){
                                        ?>
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input"></td>
                                            <td>
                                                <?= $user[1]; ?>
                                            </td>
                                            <td>
                                                <?= $user[2]; ?>
                                            </td>
                                            <td>
                                                123
                                            </td>
                                            <td>
                                                <a href="user_detail.php?id=1">
                                                    <i class="bi bi-eye-fill"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="user_edit.php?id=<?= $user[0]; ?>">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="" data-bs-toggle="modal" data-bs-target="#<?= $user[0]; ?>">
                                                    <i class="bi bi-trash3"></i>
                                                </a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="<?= $user[0]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE User</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure detele the user have id: <?= $user[0]; ?>?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                <a href="user_delete.php?id=<?= $user[0]; ?>" class="btn btn-success">OK</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="users.php?page=1">1</a></li>
                            <li class="page-item"><a class="page-link" href="users.php?page=2">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
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