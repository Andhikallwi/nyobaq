<?php

class AuthController extends Controller
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Handle login logic here
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Validate credentials and set session
            // Redirect to dashboard or show error
        } else {
            // Load login view
            require_once '../views/auth/login.php';
        }
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Handle registration logic here
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            // Validate and save user to database
            // Redirect to login or show error
        } else {
            // Load registration view
            require_once '../views/auth/register.php';
        }
    }

    public function logout()
    {
        // Handle logout logic here
        session_start();
        session_destroy();
        header('Location: index.php');
        exit();
    }
}