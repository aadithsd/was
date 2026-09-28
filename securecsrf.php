<?php
session_start();

if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] =
        bin2hex(random_bytes(32));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!isset($_POST['csrf_token']) ||
        !hash_equals(
            $_SESSION['csrf_token'],
            $_POST['csrf_token']
        )) {

        http_response_code(403);
        die("CSRF validation failed.");
    }

    $_SESSION['email_notifications'] =
        $_POST['email_notifications'];
}
?>

<form method="POST" action="secure.php">

    <input type="hidden"
           name="csrf_token"
           value="<?php echo htmlspecialchars(
               $_SESSION['csrf_token'],
               ENT_QUOTES,
               'UTF-8'
           ); ?>">

    <select name="email_notifications">
        <option value="enabled">Enabled</option>
        <option value="disabled">Disabled</option>
    </select>

    <button type="submit">Save Preference</button>

</form>