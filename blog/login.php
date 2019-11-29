<?php include('path.php'); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
guestsOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity
        crossorigin="anonymous">

        <!-- google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
        <script data-ad-client="ca-pub-5091783457643642" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

        <!-- custom styling-->
        <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>

<body>

<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <div class="auth-content">


        <form action="login.php" method="post">
            <h2 class="form-title">Login</h2>

            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>




            <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
            </div>

                <div>
                        <label>Password</label>
                        <input type="password" name="password"  value="<?php echo $username; ?>" class="text-input">
                    </div>

                        <div>
                            <button type="submit" name="login-btn" class="btn btn-big">Login</button>
                        </div>
                        <p>or <a href="<?php echo BASE_URL . '/register.php' ?>">Sign up</a></p>




        </form>
    </div>


    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
</body>

</html>