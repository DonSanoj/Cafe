<?php

include('../config/config.php');

// Start session
session_start();

if (isset($_SESSION['user_email']) || isset($_SESSION['admin_email'])) {
    if (isset($_SESSION['admin_email'])) {
        header('location: ../admin_panel/admin_dashboard.php');
    } elseif (isset($_SESSION['user_email'])) {
        header('location: ../user_panel/user_dashboard.php');
    }
} else {
    // Process login form submission
    if (isset($_POST['signin'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = $_POST['password'];

        // Fetch user from database using prepared statement
        $select_user_query = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $select_user_query);
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Verify password using password_verify
            if (password_verify($password, $row['password']) && $row['account_status'] === 'Active') {
                if ($row['user_type'] == 'admin') {
                    $_SESSION['admin_email'] = $email;
                    header('location: ../admin_panel/admin_dashboard.php');
                    exit();
                } elseif ($row['user_type'] == 'user') {
                    $_SESSION['user_email'] = $email;
                    header('location: ../user_panel/user_dashboard.php');
                    exit();
                }
            } else {
                // Invalid credentials or account inactive
                $error = "Invalid credentials or account inactive";
            }
        } else {
            // User not found
            $error = "User not found";
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
    <link rel="stylesheet" href="/assets/css/header.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>

    <title>Cafe Express - Login</title>
</head>

<body>

    <?php include('../includes/header.php'); ?>

    <form action="" method="post">

        <h3>Sign in to Cafe.</h3>

        <?php if (isset($error)) : ?>
            <p><?php echo '<span class="error-msg">' . $error . '</span>'; ?></p>
        <?php endif; ?>

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

    <script src="/assets/js/login.js"></script>

</body>

</html>