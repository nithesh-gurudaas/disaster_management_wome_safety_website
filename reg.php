<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<title>JavaScript Form Validation using a sample registration form</title>
<meta name="keywords" content="example, JavaScript Form Validation, Sample registration form" />
<meta name="description" content="This document is an example of JavaScript Form Validation using a sample registration form. " />
<link rel='stylesheet' href='styler.css'/>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<script src="form.js"></script>
</head>
<body onload="document.registration.userid.focus();">
    <div class="widget center">
  
  <div class="blur"></div>
  
  <div class="text center">      
<h1>Registration Form</h1>
Use tab keys to move from one input field to the next.
<form name='registration' onSubmit="return formValidation();">
<ul>
<li><label for="userid">User id:</label></li>
<li><input type="text" name="userid" size="12" /></li>
<li><label for="passid">Password:</label></li>
<li><input type="password" name="passid" size="12" /></li>
<li><label for="username">Name:</label></li>
<li><input type="text" name="username" size="50" /></li>
<li><label for="numb">Mobile:</label></li>
<li><input type="text" name="numb" size="50" /></li>
<li><label for="DoB">Date of Birth:</label>
<input type="date" name="DOB" id="dob"><br><br>
</li>
<li><label for="address">Address:</label></li>
<li><input type="text" name="address" size="50" /></li>
<li><label for="country">Country:</label></li>
<li><select name="country">
<option selected="" value="Default">(Please select a country)</option>
<option value="AF">Australia</option>
<option value="AL">Canada</option>
<option value="DZ">India</option>
<option value="AS">Russia</option>
<option value="AD">USA</option>
</select></li>
<li><label for="zip">ZIP Code:</label></li>
<li><input type="text" name="zip" /></li>
<li><label for="email">Email:</label></li>
<li><input type="text" name="email" size="50" /></li>
<li><label id="gender">Sex:</label></li>
<li><input type="radio" name="sex" value="Male" /><span>Male</span></li>
<li><input type="radio" name="sex" value="Female" /><span>Female</span></li>
    <li><input type="radio" name="sex" value="Other" /><span>Others</span></li>
<li><label for="desc">About:</label></li>
<li><textarea name="desc" id="desc"></textarea></li>
<li><input type="submit" name="submit" value="Submit" /></li>
</ul>
</form>
  </div>
</div>
</body>
<?php
$user="root";
$pass='';
$db='hackathon';

$db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");
echo "Connected successfully";
?>
</html>
