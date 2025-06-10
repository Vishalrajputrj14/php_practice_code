<?php
$ip = "121.0.0.1"; // IP address sahi format me

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo "Valid IP Address.";
} else {
    echo "Invalid IP Address.";
}
?>