<?php
// 30 दिनों के लिए कुकी सेट करें
setcookie("name", "raj singh", time() + (86400 * 30), "/");
setcookie("address", "jaipur rajasthan", time() + (86400 * 30), "/");
setcookie("email", "vishalrajput@gmail.com", time() + (86400 * 30), "/");
setcookie("age", "20", time() + (86400 * 30), "/");
?>

<?php
echo "<h2>Cookie Values:</h2>";

// कुकी चेक करें और प्रिंट करें
if(isset($_COOKIE["name"])) {
    echo "Cookies Name: " . $_COOKIE["name"] . "<br>";
} else {
    echo "Cookies Name not set!<br>";
}

if(isset($_COOKIE["address"])) {
    echo "Cookies Address: " . $_COOKIE["address"] . "<br>";
} else {
    echo "Cookies Address not set!<br>";
}

if(isset($_COOKIE["email"])) {
    echo "Cookies Email: " . $_COOKIE["email"] . "<br>";
} else {
    echo "Cookies Email not set!<br>";
}

if(isset($_COOKIE["age"])) {
    echo "Cookies Age: " . $_COOKIE["age"] . "<br>";
} else {
    echo "Cookies Age not set!<br>";
}
?>