<?php
session_start();
include "db.php";

if(!isset($_SESSION['role']) || $_SESSION['role']!="admin"){
    die("Access denied");
}

if(isset($_POST['add'])){
    mysqli_query($conn,"INSERT INTO questions
    (question,option_a,option_b,option_c,option_d,correct_option)
    VALUES(
      '$_POST[q]',
      '$_POST[a]',
      '$_POST[b]',
      '$_POST[c]',
      '$_POST[d]',
      '$_POST[corr]'
    )");
    echo "Question added";
}
?>

<form method="post">
Question:<br>
<textarea name="q" required></textarea><br>
A: <input name="a" required><br>
B: <input name="b" required><br>
C: <input name="c" required><br>
D: <input name="d" required><br>
Correct (a/b/c/d): <input name="corr" required><br><br>
<button name="add">Add Question</button>
</form>