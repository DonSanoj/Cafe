<?php

@include('../config/config.php');

session_start();

if (isset($_SESSION['user_email']) || isset($_SESSION['admin_email'])) {
    if (isset($_SESSION['admin_email'])) {
        header('location: ../admin_panel/admin_dashboard.php');
    } elseif (isset($_SESSION['user_email'])) {
        header('location: ../user_panel/user_dashboard.php');
    }
} else {
    if (isset($_POST['signin'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = md5($_POST['password']);


        $select_from_table = "SELECT * FROM users WHERE email = '$email' && password = '$password' && account_status = 'Active' ";
        $select_from_table_results = mysqli_query($conn, $select_from_table);

        if (mysqli_num_rows($select_from_table_results) > 0) {
            $row = mysqli_fetch_array($select_from_table_results);

            if ($row['user_type'] == 'admin') {

                $_SESSION['admin_email'] = $email;
                header('location: ../admin_panel/admin_dashboard.php');
            } elseif ($row['user_type'] == 'user') {

                $_SESSION['user_email'] = $email;
                header('location: ../user_panel/user_dashboard.php');
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Coffee shop">
    <meta name="keywords" content="HTML,CSS,JavaScript">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="/assets/css/login.css">

    <title>Cafe Express - Login</title>
</head>

<body>

    <section class="signin-form-container">

        <form action="" method="post">

            <h3>Sign in to Cafe Express</h3>

            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>

            <div class="email">
                <input type="email" name="email" placeholder="Email" required>
                <span><i class='bx bxs-envelope'></i></span>
            </div>

            <div class="password">
                <input type="password" name="password" id="password-input" placeholder="Password" required>
                <span id="toggle-password" onclick="togglePassword()"><i class="fas fa-eye"></i></span>
            </div>

            <input type="submit" name="signin" value="Sign in" class="form-btn">

            <div class="method">
                <a href="#" class="method-action">
                    <i class='bx bxl-google'></i>
                    <span>Sign in with Google</span>
                </a>
            </div>

            <p>Don't have an account? <a href="/login_and_register/register.php">Create Now</a></p>

        </form>

    </section>

    <script src="/assets/js/login.js"></script>

</body>

</html>