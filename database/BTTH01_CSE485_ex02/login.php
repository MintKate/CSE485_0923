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
                    <p class="text-light">Sign in</p>  
                    <hr>
                    <form class>
                        <div class="form-group-user d-flex justify-content-center">
                            <i class="icon h3 bi bi-person-fill bg-light"></i>
                            <input type="text" class="form-control-user" id="username" placeholder="Enter your username">
                        </div>
                        <div class="form-group-user d-flex justify-content-center">
                            <i class="icon h4 fa fa-key"></i>
                            <input type="password" class="form-control-user" id="password" placeholder="Enter your password">
                        </div>
                        <div class="sbm d-flex justify-content-between">
                            <div class="sbm-item form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label text-light" for="flexCheckChecked">
                                    Remember me
                                </label>
                            </div>
                            <div class="sbm-item" style="padding-right: 10px;">
                                <button type="submit" class="sbmLogin btn btn-warning text-dark">Login</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="end-form d-flex justify-content-center">
                        Don't have an account? <a href="#" class="Sign-up text-warning"> Sign up </a>
                    </div>
                    <div class="end-form d-flex justify-content-center">
                        
                        <span class="repass text-warning">Forgot your password? </span>

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