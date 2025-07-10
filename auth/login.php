<?php
session_start();
require_once "../config/database.php";

if (isset($_POST["login"])) {
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $errors = [];

    if (empty($email) || empty($password)) {
        $errors[] = "All fields are required.";
    } else {
        $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows === 1) {
            $stmt->bind_result($id, $username, $hashedPassword);
            $stmt->fetch();
            if (password_verify($password, $hashedPassword)) {
                $_SESSION["user"] = $username;
                header("Location: ../public/index.php");
                exit();
            } else {
                $errors[] = "Incorrect password.";
            }
        } else {
            $errors[] = "Email not found.";
        }
    }

    $_SESSION["errors"] = $errors;
    header("Location: ../public/login_form.php");
    exit();
}
?>
