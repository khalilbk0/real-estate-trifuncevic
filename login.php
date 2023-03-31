<?php 

session_start();

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    // Redirect to the dashboard or homepage
    header("Location: index.php");
    exit();
}

// Check if the login form has been submitted
if (isset($_POST['email']) && isset($_POST['password'])) {
    // Get the user's credentials from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate the user's credentials (you should replace this with your own validation code)
    if ($email === 'user' && $password === '123') {
        // Set a session variable to indicate that the user is logged in
        $_SESSION['user_id'] = 1;

        // Redirect to the dashboard or homepage
        header("Location: dashboard.php");
        exit();
    } else {
        // Show an error message if the credentials are incorrect
        $error = "Invalid email or password";
    }
}
?>

 



<!DOCTYPE html>
<html lang="en">
<head>
     
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login | trifuncevic</title>
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@coreui/coreui@2.1.16/dist/css/coreui.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/coreui-icons-free@1.0.1-alpha.1/coreui-icons-free.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
</head>
<body class="app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
        </div>
        <div class="col-md-6">
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body table-responsive">
                        <div class="col-md-12 text-center">
                            <img src="./logo.png">
                        </div>

                        <form method="post" action="">
                            <input type="hidden" name="_token" value="fbyVThF82u2yqP3wvlD65QYOQSO5Gmdtn4JScf0j">                            <h1>Login</h1>
                            <p class="text-muted">Sign In to your account</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="icon-user"></i>
                                    </span>
                                </div>
                                <input class="form-control " name="email" value=""
                                       placeholder="User">
                                                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="icon-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control " placeholder="Password" name="password">
                                                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-primary px-4" type="submit">Login</button>
                                </div>
                         
                            </div>
                        </form>
                    </div>
                </div>










            </div>
        </div>
    </div>
</div>
<!-- CoreUI and necessary plugins-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@2.1.16/dist/js/coreui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.js"></script>
</body>
</html>
