<?php
session_start();
$errors = $_SESSION["errors"] ?? [];
unset($_SESSION["errors"]);
?>
<!DOCTYPE html>
<html>
<head>

<title>Login</title>
    <link rel="stylesheet" href="..assets/style.css">
</head>
<body>
<h2>Login</h2>
<?php foreach ($errors as $e): ?>
    <div style="color:red"><?= htmlspecialchars($e) ?></div>
<?php endforeach; ?>
<form action="../auth/login.php" method="POST">
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit" name="login">Login</button>
</form>
<p>Don't have an account? <a href="register_form.php">Register</a></p>
</body>
</html>
