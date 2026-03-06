<?php
session_start();
include "db.php";

q = mysqli_query($conn,"SELECT * FROM questions");
?>

<form method="post" action="result.php">
<?php while(row = mysqli_fetch_assoc(q)){ ?>
<p>
<b><?php echo row['question']; ?></b><br>
<input type="radio" name="ans[<?php echo row['id']; ?>]" value="a"> <?php echo row['option_a']; ?><br>
<input type="radio" name="ans[<?php echo row['id']; ?>]" value="b"> <?php echo row['option_b']; ?><br>
<input type="radio" name="ans[<?php echo row['id']; ?>]" value="c"> <?php echo row['option_c']; ?><br>
<input type="radio" name="ans[<?php echo row['id']; ?>]" value="d"> <?php echo row['option_d']; ?><br>
</p>
<?php } ?>
<button type="submit">Submit Exam</button>
</form>