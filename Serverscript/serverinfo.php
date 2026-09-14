<?php
$target = $_GET['target'] ?? '';
$target = trim($target);
if ($target == '') {
    die("No URL or IP address provided.");
}
/* Add http:// if protocol is not specified */
if (!preg_match("/^https?:\/\//i", $target)) {
    $target = "http://" . $target;
}
/*Parse URL*/
$url = parse_url($target);
if (!isset($url['host'])) {
    die("Invalid URL or IP address.");
}
$host = $url['host'];
/* DNS lookup */
$ip = gethostbyname($host);
/* HTTP request */
$headers = @get_headers($target, true);
echo "<h3>Server Information</h3>";
echo "<b>Input:</b> " .
     htmlspecialchars($target) . "<br><br>";
echo "<b>Hostname:</b> " .
     htmlspecialchars($host) . "<br>";
echo "<b>IP Address:</b> " .
     htmlspecialchars($ip) . "<br>";
/* HTTP Status */
if ($headers !== false) {
    echo "<b>HTTP Status:</b> " .
         htmlspecialchars($headers[0]) . "<br>";
    /* Server software */
    if (isset($headers['Server'])) {
        $server = is_array($headers['Server'])
                ? end($headers['Server'])
                : $headers['Server'];
        echo "<b>Server Software:</b> " .
             htmlspecialchars($server) . "<br>";
    }
    /* Content type */
    if (isset($headers['Content-Type'])) {
        $type = is_array($headers['Content-Type'])
                ? end($headers['Content-Type'])
                : $headers['Content-Type'];
        echo "<b>Content Type:</b> " .
             htmlspecialchars($type) . "<br>";
    }
} else {
    echo "<b>Status:</b> Unable to connect to the server.<br>";
}
echo "<br><b>DNS Information:</b><br>";
$hostname = gethostbyaddr($ip);
echo "Reverse DNS: " .
htmlspecialchars($hostname);
?>