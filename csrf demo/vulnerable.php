<?php
session_start();
// Create a demo session
if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = "student";
    $_SESSION['email_notifications'] = "enabled";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // VULNERABLE: no CSRF token is checked
    if (isset($_POST['email_notifications'])) {
        $_SESSION['email_notifications'] = $_POST['email_notifications'];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>CSRF Vulnerable Demo</title>
</head>
<body>

<h2>Student Profile</h2>

<p>Logged-in User:
    <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>
</p>
<p>
Email Notifications:
<strong>
<?php echo htmlspecialchars($_SESSION['email_notifications']); ?>
</strong>
</p>
<form method="POST" action="vulnerable.php">
    <label>Email Notifications:</label>
    <select name="email_notifications">
        <option value="enabled">Enabled</option>
        <option value="disabled">Disabled</option>
    </select>
    <button type="submit">Save Preference</button>
</form>
</body>
</html>