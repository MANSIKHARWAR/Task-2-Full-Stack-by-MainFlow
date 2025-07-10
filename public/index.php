<?php
session_start();
if (!isset($_SESSION["users"])) {
    header("Location: login_form.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="login-signup-system/assets/styles.css">
</head>
<body>
    <h1>Welcome, <?= htmlspecialchars($_SESSION["users"]) ?>!</h1>
    <a href="../auth/logout.php">Logout</a>
</body>
</html>
