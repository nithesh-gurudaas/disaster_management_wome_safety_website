<!DOCTYPE html>
 <html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link href="style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <section>				
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="register" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="Your username here" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="Your email ID here"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="Your password here"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="Confirm password"/>
                                </p>
                                <p> 
                                    <label for="mobno" class="unumber" >Your mobile number </label>
                                    <input id="mobno" name="mobnum" required="required" type="numb" placeholder="eg. 9876543210"/>
                                </p>
                                <p class="signin button"> 
                                    <div style="text-align: center">
									<input type="submit" value="Sign up"/> 
                                </div>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
	<?php
		$user="root";
		$pass='';
		$db='hackathon';

		$db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");
		echo "Connected successfully";
		if(isset($_POST['registerbtn'])){
			$usernam=($_POST['usernamesignup']);
			$emaill=($_POST['emailsignup']);
			$passwor=($_POST['passwordsignup']);
			$passworconf=($_POST['passwordsignup_confirm']);
			$mobilee=$_POST['mobnum'];
			if($passwor==$passworconf)
			{
				$passwor=md5($passwor);
				$sql="INSERT INTO regn(uname,mail,pass,mob) VALUES('$usernam','$emaill','$passwor','$mobilee')";
				mysqli_query($db,$sql);	
			}
			else
			{
					$_SESSION['message']="The passwords do not match";
			}
		}
	?>
</html>