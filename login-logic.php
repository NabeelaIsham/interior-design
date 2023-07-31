<?php
require 'config/database.php';

session_start();

if (isset($_POST['submit'])) {
    // Get form data
    $email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (empty($email)) {
        $_SESSION['signin'] = "Email required";
    } elseif (empty($password)) {
        $_SESSION['signin'] = "Password required";
    } else {
        // Fetch user from the database
        $fetch_user_query = "SELECT * FROM users WHERE Email = '$email' ";
        $fetch_user_result = mysqli_query($conn, $fetch_user_query);

        if (mysqli_num_rows($fetch_user_result) == 1) {
            // Convert the record into an associative array
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['password'];

            // Compare form password with database password
            if (password_verify($password, $db_password)) {
                // Set session for access control
                $_SESSION['user-id'] = $user_record['id'];

                // Set session if user is an admin
                if ($user_record['is_agreed'] == 1) {
                    $_SESSION['user_is_agreed'] = true;
                }

                // Log user in
                header('location: index.php');
                exit();
            } else {
                $_SESSION['signin'] = "Please check your email and password";
            }
        } else {
            $_SESSION['signin'] = "User not found";
        }
    }

    // If there is any problem, redirect back to the sign-in page
    if (isset($_SESSION['signin'])) {
        $_SESSION['signin-data'] = $_POST;
        header('location: contact.php');
        exit();
    }
} else {
    header('location: portfolio.php');
    exit();
}
?>
