<?php
session_start();
 
/* Protect page */
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
 
/* Escape output */
function h($v) {
    return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
 
<h2>Dashboard</h2>
 
<p>Welcome, <strong><?php echo h($_SESSION['username']); ?></strong></p>
 
<a href="logout.php">Logout</a>
 
</body>
</html>