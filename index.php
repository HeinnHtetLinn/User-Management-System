<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .warp{
            width:100%;
            max-width: 400px;
            margin:40px auto;
        }
    </style>
</head>
<body class="text-center">
    <div class="warp">
        <h1 class="h3 mb-3">Login</h1>

        <?php if(isset($_GET['registered'])) :?>
            <div class="alert alert-success">
                Account created.Please Login.
            </div>
        <?php endif ?>
        <?php if(isset($_GET['suspended'])) :?>
            <div class="alert alert-danger">
                Your account is suspended.
            </div>
        <?php endif ?>

        <?php if(isset($_GET['incorrect'])) :?>
            <div class="alert alert-warning">
                Incorrect Email or Password
            </div>
        <?php endif;?>
        <form action="_actions/login.php" method="post">
            <input class="form-control mb-2" type="email" name="email" placeholder="Enter Your Email" required>
            <input class="form-control mb-2" type="password" name="password" placeholder="Enter Your Password" required>
            <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>    
        </form>
        <br>
        <a href="register.php">Register</a>
    </div>
    
</body>
</html>