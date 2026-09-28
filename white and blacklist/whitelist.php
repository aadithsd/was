<?php
session_start();

// Simulated logged-in username
$_SESSION['username'] = 'Amrita'; // Change this to test different usernames
// Whitelisted usernames
$whitelisted_users = ['Amrita', 'vishwa', 'vidya'];
// Function to check if a user is whitelisted
function isWhitelisted($username, $whitelist) {
    return in_array($username, $whitelist);
}
// Check if the logged-in user is whitelisted
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    if (isWhitelisted($username, $whitelisted_users)) {
        echo "Welcome, $username! You have access to this resource.";
    } else {
        echo "Access denied. Your username is not whitelisted.";
    }
} else {
    echo "No user is logged in.";
}
?>