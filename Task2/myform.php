<?php include "Control/results.php"; ?>

<!DOCTYPE html>
<html>
<body>
<h1>Registration form </h1>
<form action="Process.php" method="POST">
First name: <input type="text" name="fname"> <?php echo $fname; ?>
<br>
Last name: <input type="text" name="lname"> <?php echo $lname; ?>
<br>
Age: <input type="number" name="age"> <?php echo $age; ?>
<br>
<p>Designation
  <input type="radio" id="opt1" name="designation" value="Junior Programmer">
  <label for="opt1">Junior Programmer</label>
  <input type="radio" id="opt2" name="designation" value="Senior Programmer">
  <label for="opt2">Senior Programmer</label>
  <input type="radio" id="opt3" name="designation" value="Project Lead">
  <label for="opt3">Project Lead</label>
</p>
  <?php echo $radio; ?>
<br>
<br>
<p>Preffered Language
  <input type="checkbox" id="lan1" name="language" value="JAVA">
  <label for="lan1">JAVA</label>
  <input type="checkbox" id="lan2" name="language" value="PHP">
  <label for="lan2">PHP</label>
  <input type="checkbox" id="lan3" name="language" value="C++">
  <label for="lan3">C++</label>
</p>
  <?php echo $radio2; ?>
<br>

E-mail: <input type="text" name="email"> <?php echo $email; ?>
<br>
Password: <input type="password" name="password"> <?php echo $password; ?>
<br>
Please choose a file  <input type="file" value="Choose File"> 

<br>




<input type="submit" value="SUBMIT">
<input type="reset" value="RESET">
</form>
</body>
</html>