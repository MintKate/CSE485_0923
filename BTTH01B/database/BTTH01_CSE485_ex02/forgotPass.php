


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
    <link rel="stylesheet" href="css/login.css">
    
</head>
<body>
    <div class="container-fluid">
        <?php include 'layout/header.php' ?>
        
        <div class="main">
            <div class="form d-flex justify-content-center">
                <div class="sign-in bg-secondary">
                    <p class="text-light">Rewrite your infomation</p>  
                    <hr>
                    <!-- <form class>
                        <div class="form-group-user d-flex justify-content-center">
                            <i class="icon h3 bi bi-person-fill"></i>
                            <input type="text" class="form-control-user" id="username" placeholder="Enter your username">
                        </div>
                        <div class="form-group-user d-flex justify-content-center">
                            <i class="icon h4 fa fa-key"></i>
                            <input type="password" class="form-control-user" id="password" placeholder="Enter your password">
                        </div>
                        <div class="form-group-user d-flex justify-content-center">
                            <i class="icon h4 fa fa-key"></i>
                            <input type="repass" class="form-control-user" id="repass" placeholder="Enter your password again">
                        </div>
                        <div class="sbm d-flex justify-content-between">
                            
                            <div class="sbm-item" style="padding-right: 10px;">
                                <button type="submit" class="sbmOTP btn btn-warning text-dark">Send OTP</button>
                            </div>
                        </div>
                    </form> -->

                    <form method="post" action="forgot_password.php">
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>
  <button type="submit">Gửi</button>
</form>
                    <hr>
                    <div class="end-form d-flex justify-content-center">
                        <a href="#" class="Send OTP text-warning"> Send OTP </a>
                    </div>
                    <!-- <div class="end-form d-flex justify-content-center">
                        <a href="">
                            <span class="repass text-warning">Forgot your password? </span>
                        </a> 
                    </div> -->
                </div>
            </div>
            
            
               

            <?php include 'layout/end.php' ?>   
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">

    </script>
</body>
</html>