<?php
    // session_start();
    // if(!isset($_SESSION['user'])) {
    //     header("location: index.php");
    //     exit();
    // }
    include("vendor/autoload.php");
    use Helpers\Auth;

    $user = Auth::check();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="max-width: 800px">
        <h1 class="h3 my-4">Profile</h1>

        <?php if($user->photo): ?>
            <img src="_actions/photos/<?= $user->photo ?>" width="300" class="img-thumbnail" alt="">
        <?php endif ?>

        <form action="_actions/upload.php" method="post" enctype="multipart/form-data" class="input-group py-4">
            <input type="file" name="photo" class="form-control">
            <button class="btn btn-secondary">Upload</button>
        </form>

        <ul class="list-group mb-3">
            <li class="list-group-item">Name: <?= $user->name ?></li>
            <li class="list-group-item">Email: <?= $user->email ?></li>
            <li class="list-group-item">Phone: <?= $user->phone ?></li>
            <li class="list-group-item">Address: <?= $user->address ?></li>
        </ul>
        
        <a href="admin.php">Admin</a> |
        <a href="_actions/logout.php" class="text-danger">logout</a>
    </div>
</body>
</html>