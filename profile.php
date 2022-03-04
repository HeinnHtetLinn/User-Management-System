<?php

    include("./vendor/autoload.php");

    use Helpers\Auth;

    $auth = Auth::check();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!--Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-5 mt-5">
            <?=$auth->name?>
            <span class="fw-normal text-muted">
                (<?= $auth->role ?>)
            </span>
        </h1>

        <?php if(isset($_GET['error'])) :?>
            <div class="alert alert-warning">
                Cannot upload file
            </div>

        <?php endif; ?>

        <?php if($auth->photo):?>
            <img class="img-thumbnail mb-3" src="_actions/photos/<?= $auth->photo ?>" alt="profile-img" width="200">

        <?php endif; ?>

        <form action="_actions/upload.php" method="post" enctype="multipart/form-data">
            <div class="input-group mb-3">
                <input type="file" name="photo" id="photo" class="form-control">
                <button class="btn btn-secondary">Upload</button>
            </div>
        </form>

        <ul class="list-group">
            <li class="list-group-item">
                <b>Email:</b> <?= $auth->email?>
            </li>
            <li class="list-group-item">
                <b>Phone:</b> (09)<?= $auth->phone ?>
            </li>
            <li class="list-group-item">
                <b>Address:</b><?= $auth->address ?>
            </li>
        </ul>
        <br>


        <a href="admin.php">Manage User</a>
        <a href="_actions/logout.php" class="text-danger">Logout</a>
    </div>
</body>
</html>