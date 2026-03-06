<?php
session_start();
include "db.php";

$score = 0;
$total = 0;

if(isset($_POST['ans'])){
    foreach($_POST['ans'] as $qid=>$ans){
        $r = mysqli_query($conn,"SELECT correct_option FROM questions WHERE id=$qid");
        $row = mysqli_fetch_assoc($r);
        if($ans == $row['correct_option']) $score++;
        $total++;
    }
}

$uid = $_SESSION['uid'];
$date = date("Y-m-d");

mysqli_query($conn,"INSERT INTO results(user_id,score,total,exam_date)
VALUES($uid,$score,$total,'$date')");

echo "<h2>Your Score: $score / $total</h2>";
?>