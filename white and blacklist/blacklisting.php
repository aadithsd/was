<?php
session_start();

// Simulated logged-in username
$_SESSION['username'] = 'Amruta'; 

// Whitelisted usernames
$whitelisted_users = ['Amrita', 'vishwa', 'vidya'];

// Blacklisted usernames
$blacklisted_users = ['honey', 'trojan', 'ransom'];

// Function to check if a user is whitelisted
function isWhitelisted($username, $whitelist) {
    return in_array($username, $whitelist);
}

// Function to check if a user is blacklisted
function isBlacklisted($username, $blacklist) {
    return in_array($username, $blacklist);
}

// Check if the logged-in user is whitelisted and not blacklisted
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    if (isBlacklisted($username, $blacklisted_users)) {
        echo "Access denied. Your username is blacklisted.";
    } elseif (isWhitelisted($username, $whitelisted_users)) {
        echo "Welcome, $username! You have access to this resource.";
    } else {
        echo "Access denied. Your username is not whitelisted.";
    }
} else {
    echo "No user is logged in.";
}
?>