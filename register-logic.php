<?php

 require 'config/database.php';

 // get signup form data

 if (isset($_POST['submit'])) {
   $fullname = filter_var($_POST['name'],
    FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'],
    FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'],
    FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['password'],
    FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['REpassword'],
    FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   
  
    //validate input values
 
    if (!$fullname) {
       $_SESSION['signup'] = "please enter your  name";
    }  elseif (!$username) {
       $_SESSION['signup'] = "please enter your username";
    } elseif (!$email) {
       $_SESSION['signup'] = "please enter a valid email";
    } elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
       $_SESSION['signup'] = "password should be 8+ characters";
    } else {
       // check if password dont match
 
       if ($createpassword !== $confirmpassword) {
          $_SESSION['signup'] = "Passwords doesnt match";
       } else {
          //hash password
          $hashed_password = password_hash($createpassword,PASSWORD_DEFAULT);
          
          //check if username or email already exist in datbase
             $user_check_query = "SELECT * FROM users WHERE
              Username='$username' OR Email = '$email'";
              $user_check_result = mysqli_query($conn,
              $user_check_query);
              if (mysqli_num_rows($user_check_result) > 0) {
              $_SESSION['signup'] = "Username or Email already exists";
              } else {
               

                 } 
              }
 
       }
    
     
    // redirect back to signup page if there was any problem
    if (isset($_SESSION['signup'])) {
      //pass form data back to signup page
      $_SESSION['signup-data'] = $_POST;
      header('location: contact.php');
      die();
    } else {
      //insert new user into users table
      $insert_user_query = "INSERT INTO users SET Fname = '$fullname', 
       Username = '$username', 
      Email = '$email', password = '$hashed_password',  is_agreed = 0"; 
    
      $insert_query_result = mysqli_query($conn, $insert_user_query);

      if (!mysqli_errno($conn)) {
         //redirect to login page with success message
         $_SESSION['signup-success'] = "Registration successful. Please log in";
         header('location: index.php');
         die();
      }
    }

  } else {
     //button wasnt click
     header('location: index.php');
     die();
  }