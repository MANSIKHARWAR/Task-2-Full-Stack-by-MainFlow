<?php
session_start();
$errors = $_SESSION["errors"] ?? [];
unset($_SESSION["errors"]);
?>
<!DOCTYPE html>
<html>
<head><title>Register</title>
<link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
<h2>Register</h2>
<?php foreach ($errors as $e): ?>
    <div style="color:red"><?= htmlspecialchars($e) ?></div>
<?php endforeach; ?>
<form action="../auth/register.php" method="POST">
    <input type="text" name="username" placeholder="Username"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="password" name="confirm" placeholder="Confirm Password"><br>
    <button type="submit" name="register">Register</button>
</form>
<p>Already have an account? <a href="login_form.php">Login</a></p>
</body>
</html>
