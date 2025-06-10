<?php
session_start();
?>

</head>
<body>
    <?php
echo "user is :".$_SESSION["user"];
echo "<br>";
echo "user is :".$_SESSION["address"];
echo "<br>";
echo "user is :".$_SESSION["email"];
echo "<br>";
echo "user is :".$_SESSION["mobile_no"];
echo "<br>";
    ?>
</body>
</html>