<?php
// 1. Start session (REQUIRED for user handling)
session_start();

// 2. Show errors (development only)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 3. Database connection
include "db.php";

// 4. Safety check: form submitted or not
if (!isset($_POST['ans'])) {
    die("NO ANSWERS RECEIVED");
}

// 5. Temporary user (for mini project)
// Later this will come from login
if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = 1;   // TEMP
}
$user_id = $_SESSION['user_id'];

// 6. Calculate score
$userAnswers = $_POST['ans'];
$score = 0;

$q = mysqli_query($conn, "SELECT id, correct_option FROM questions");
$total = mysqli_num_rows($q);

while ($row = mysqli_fetch_assoc($q)) {
    if (isset($userAnswers[$row['id']]) &&
        $userAnswers[$row['id']] == $row['correct_option']) {
        $score++;
    }
}

// 7. Prevent multiple attempts (IMPORTANT)
$check = mysqli_query($conn,
    "SELECT id FROM results WHERE user_id = $user_id"
);

$check = mysqli_query($conn,
"SELECT id FROM results 
 WHERE user_id = $user_id 
 AND DATE(exam_date) = CURDATE()"
);

if (mysqli_num_rows($check) > 0) {
    die("You already attempted today");
}

// 8. Insert result with date
$sql = "INSERT INTO results (user_id, score, total, exam_date)
        VALUES ($user_id, $score, $total, NOW())";

if (!mysqli_query($conn, $sql)) {
    die("INSERT ERROR: " . mysqli_error($conn));
}

// 9. Show result
$percent = round(($score / $total) * 100);

echo "<h2>Your Score: $score / $total</h2>";
echo "<h3>Percentage: $percent%</h3>";
echo "<a href='index.php'>Go Back</a>";
?>