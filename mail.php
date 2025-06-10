<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rating = $_POST['rating'];
    $comments = $_POST['comments'];

    echo "<h2>Thank You for Your Feedback</h2>";
    echo "Rating: $rating<br>";
    echo "Comments: $comments";
}
?>
