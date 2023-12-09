<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="/assets/css/login.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>

    <title>Cafe Express - Register</title>
</head>

<body>

    <!-- Register form section start -->
    <section class="register-form-container">

        <form action="" method="post">

            <h3>Create Your Account</h3>

            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>

            <div class="name">
                <input type="text" name="name" placeholder="Name" required>
                <span><i class='bx bxs-user'></i></span>
            </div>

            <div class="email">
                <input type="email" name="email" placeholder="Email" required>
                <span><i class='bx bxs-envelope'></i></span>
            </div>

            <div class="password">
                <input type="password" name="password" id="password-input" placeholder="Password" required>
                <span id="toggle-password" onclick="togglePassword()"><i class="fas fa-eye-slash"></i></span>
            </div>

            <div class="confirm-password">
                <input type="password" name="cpassword" id="confirm-password-input" placeholder="Confirm password" required>
                <span id="toggle-confirm-password" onclick="toggleConfirmPassword()"><i class="fas fa-eye-slash"></i></span>
            </div>

            <input type="submit" name="submit" value="register now" class="form-btn">

            <p>already have an account? <a href="/login_and_register/login.php">Sign In Now</a></p>

        </form>

    </section>

    <script src="/assets/js/login.js"></script>

</body>

</html>