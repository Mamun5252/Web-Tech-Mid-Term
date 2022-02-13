<?php
include "../Control/result.php";
?>
<html>
    <body>
    <form action=""method="post">
First Name:
<input type="fname" name="fname"><br>
Last Name:
<input type="lname" name="lname">
<br>
Age:    
<input type="age" name="age">
<br>
Designation:
<input type="radio">Junior Programmer
<input type="radio">Senior Programmer
<input type="radio">Project Lead
<br>
Preferred Language
<input type="radio">JAVA
<input type="radio">PHP
<input type="radio">C++
<br>
E-mail:
<input type="email" name="email">
<br>
Password:
<input type="password" name="pass">
<br>
Please choose a file <input type="file" name="myfile">

<br>
<input type="submit" name="Submit">
<input type="reset" name ="Reset">
</form>
</body>
</html>