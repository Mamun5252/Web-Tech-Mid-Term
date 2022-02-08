<?php
$fname=$lname=$age=$email=$pass="";
if (isset($_POST["Submit"]))
{
$fname= $_POST["fname"];
if (empty($fname) || strlen($fname>5))
{
    echo "enter a valid First name";
}
else
{
echo "your First name is ".$fname;
}
echo "<br>";
$lname= $_POST["lname"];
if (empty($lname))
{
    echo "enter a valid Last name";
}
else
{
    echo "your username Last name is ".$lname;
}
echo "<br>";
$age= $_POST["age"];
if (empty($age))
{
    echo "enter a valid age";
}
else
{
    echo "your age is ".$age;
}
echo "<br>";
$email= $_POST["email"];
if ($email=="")
{
    echo "enter a valid email";
}
else
{
    echo "your email is ".$email;
}
echo "<br>";

$pass= $_POST["pass"];
if ($pass=="")
{
    echo "enter a valid password";
}
else
{
    echo "your password name is ".$pass;
}
echo "<br>";
if (isset($_POST["radio"]))
{
    echo "you have selected".$_post["radio"];
}
else
{
echo "please select a redio button";
}
 
}
?>