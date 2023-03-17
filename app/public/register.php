<?php

    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $passwordConfirm = trim($_POST['password-confirmation']);

    // Check if required fields are not empty
    if(empty($username) || empty($email) || empty($password) || empty($passwordConfirm)) {
        $error = "Please fill in all required fields.";
    }
    // Check if email is in a valid format
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address.";
    } else if($password != $passwordConfirm) {
        $error = "Password and its confirmation does not match";
    }
    else {

        // All validation passed, do something with the data
        // For example, save the user to a database
        // And then redirect to a success page
        header("Location: index.php?registration=success");
        exit();
    }

    header("Location: index.php?error=$error");

