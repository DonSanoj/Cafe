<?php
@include('../config/config.php');

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['cpassword'];

    // Check if passwords match
    if ($password != $confirm_password) {
        $error[] = "Password does not match";
    } else {
        // Check if user already exists
        $user_exists_query = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $user_exists_query);
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $error[] = "User already exists";
        } else {
            // Insert user
            $insert_user_query = "INSERT INTO users (name, email, password, user_type) VALUES (?, ?, ?, 'user')";
            $stmt = mysqli_prepare($conn, $insert_user_query);
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $hashed_password);

            if (mysqli_stmt_execute($stmt)) {
                header('Location: /login_and_register/login.php');
                exit();
            } else {
                $error[] = "Error inserting user";
            }
        }
    }
}

// Handle errors here, e.g., display error messages to the user
if (!empty($error)) {
    foreach ($error as $msg) {
        echo $msg . "<br>";
    }
}
?>

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

            <input type="submit" name="register" value="register now" class="form-btn">

            <p>already have an account? <a href="/login_and_register/login.php">Sign In Now</a></p>

        </form>

    </section>

    <script src="/assets/js/login.js"></script>

</body>

</html>