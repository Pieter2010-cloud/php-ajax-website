<?php
include 'dbconn.php';

$naam = $_POST["naam"];
$score = $_POST["score"];

$query = "INSERT INTO scores (username, score) VALUES ('$naam', $score)";

if (mysqli_query($con, $query)) {
    $message = "Score opgeslagen!";
} else {
    $message = "Fout: " . mysqli_error($con);
}

mysqli_close($con);
?>
<!DOCTYPE HTML>
<html>
<body>
    <p><?=$message?></p>
    <p>De uitgevoerde query is:</p>
    <pre><?=$query?></pre>
</body>
</html>