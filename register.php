<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
guestOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/bbc375b4ba.js" crossorigin="anonymous"></script>
    <title>Register</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <div class="auth-content">
        <form action="register.php" method="post">
            <h2 class="form-title">Register</h2>
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
            <div>
                <label for="">Username: </label>
                <input type="text" name="username" id="" class="text-input" required>
            </div>
            <div>
                <label for="">Email: </label>
                <input type="email" name="email" id="" class="text-input" required>
            </div>
            <div>
                <label for="">Password: </label>
                <input type="password" name="password" id="" class="text-input" required>
            </div>
            <div>
                <label for="">Password Repeat: </label>
                <input type="password" name="passwordConf" id="" class="text-input" required>
            </div>
            <div>
                <a href="<?php echo BASE_URL . '/login.php' ?>">Already have an Account ?<br></a>
            </div>
            
            <div>
                <button type="submit" name="register-btn" class="btn  btn-big">Register</button>
            </div>
            
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>