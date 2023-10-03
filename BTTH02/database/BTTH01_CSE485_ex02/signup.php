<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <link rel="stylesheet" href="css/layout.css">
    <!-- <link rel="stylesheet" href="css/login.css"> -->
    
</head>
<body>
    <div class="container-fluid">
        <?php include 'layout/header.php' ?>
        
        <div class="row " >
            <div class="form col d-flex justify-content-center" id="login_content">
                <div class="row">
                    <div id="form-icon" class="icon d-flex justify-content-end">
                        <i class="bi bi-facebook" style="font-size: 50px; color: #FFC107"></i>
                        <i class="bi bi-google" style="font-size: 50px; color: #FFC107"></i>
                        <i class="bi bi-twitter" style="font-size: 50px; color: #FFC107"></i>
                    </div>
                    <?php
                            if(isset($_GET['error'])){
                                echo "<p>{$_GET['error']}</p>";
                            }
                        ?>
                    <div class="form-login bg-secondary" id="form_login">
                        <form class="form-group-login" action="register.php" method="post">
                            <p style="font-size:40px; color: white;">Sign Up</p>
                            <hr>
                            <div id="liveAlertPlaceholder"></div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" placeholder="username" name="username">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope-fill"></i></span>
                                <input type="email" class="form-control" placeholder="email" name="email">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                                <input type="password" class="form-control" placeholder="password" name="pass1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                                <input type="password" class="form-control" placeholder="re-type password" name="pass2">
                            </div>
                            
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-warning mb-5" type="submit" name="sbmLogin">Sign up</button>
                            </div>
                            
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    
       
            <?php include 'layout/end.php' ?>   
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">

    </script>
</body>
</html>