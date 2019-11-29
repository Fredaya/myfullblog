<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");

adminOnly();

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
        <link rel="stylesheet" href="../assets/css/style.css">

        <!-- admin styling-->
        <link rel="stylesheet" href="../assets/css/admin.css">


    <title>Admin Section - Dashboard</title>
</head>

<body>

       <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!--Admin page wrapper -->
    <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

          <!-- Admin Content -->
          <div class="admin-content">
              <div class="content">

                <h2 class="page-title">Dashboard</h2>

                <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

              </div>
          </div>
          <!-- // Admin Content -->



    </div>
    <!--// page wrapper -->

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--  Ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
    <!-- Custom Script -->
    <script src="../assets/js/scripts.js"></script>
</body>

</html>