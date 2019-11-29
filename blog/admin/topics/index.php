<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php");

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
        <link rel="stylesheet" href="../../assets/css/style.css">

        <!-- admin styling-->
        <link rel="stylesheet" href="../../assets/css/admin.css">


    <title>Admin Section - Manage Topics</title>
</head>

<body>

       <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!--Admin page wrapper -->
    <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

          <!-- Admin Content -->
          <div class="admin-content">
              <div class="button-group">
                  <a href="create.php" class="btn btn-big">Add Topics</a>
                  <a href="index.php" class="btn btn-big">Manage Topics</a>
                </div>

              <div class="content">

                <h2 class="page-title">Manage Topics</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>


                <table>
                    <thead>
                        <th>SN</th>
                        <th>Title</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($topics as $key => $topics): ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $topics['name']; ?></td>
                        <td><a href="edit.php?id=<?php echo $topics['id']; ?>" class="edit">edit</a></td>
                        <td><a href="index.php?del_id=<?php echo $topics['id']; ?>" class="delete">delete</a></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>

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
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>