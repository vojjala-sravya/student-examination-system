<?php
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Online Exam</title>
</head>
<body>

<?php
$result = mysqli_query($conn, "SELECT * FROM questions");

echo "<form method='post' action='submit.php'>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<p><b>".$row['question']."</b></p>";

    echo "<input type='radio' name='ans[".$row['id']."]' value='a'> ".$row['option_a']."<br>";
    echo "<input type='radio' name='ans[".$row['id']."]' value='b'> ".$row['option_b']."<br>";
    echo "<input type='radio' name='ans[".$row['id']."]' value='c'> ".$row['option_c']."<br>";
    echo "<input type='radio' name='ans[".$row['id']."]' value='d'> ".$row['option_d']."<br><br>";
}

echo "<input type='submit' value='Submit Exam'>";
echo "</form>";
?>

</body>
</html>