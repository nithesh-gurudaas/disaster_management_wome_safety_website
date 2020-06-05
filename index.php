<!DOCTYPE html>
<html>
    <head>
        <title>My Chat App</title>
        <link rel="stylesheet" href="style.css" media="all" />
		<?php
		
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "chat";
 
$con = new mysqli($host, $user, $pass, $db_name);
		?>
    </head>
    
    <body>
        <div id="container">
            <div id="chat_box">
			<?php
				$query = "SELECT * FROM chat ORDER BY id";
				$run = $con->query($query);
				while($row = $run->fetch_array()) :
			?>
            <div id="chat_data">
				<span style="color:green;"><?php echo $row['name']; ?> : </span> 
				<span style="color:brown;"><?php echo $row['msg']; ?></span>
			</div>
			<?php endwhile; ?>
            </div>
            <form method="post" action="index.php">
                <input type="text" name="name" placeholder="Enter Name: " />
                <textarea name="enter message" placeholder="Enter Message"></textarea>
                <input type="submit" name="submit" value="Send!" />
            </form>
			
        </div>
			<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$msg = $_POST['enter_message'];

		$query = "INSERT INTO chat (name,msg) VALUES ('$name','$msg')";
		$run = $con->query($query);
	}  
?>
        </div>
		<script>
	function chat_ajax(){
		var req = new XMLHttpRequest();
		req.onreadystatechange = function() {
			if(req.readyState == 4 && req.status == 200){
				document.getElementById('chat').innerHTML = req.responseText;
			}
		}
		req.open('GET', 'chat.php', true);
		req.send(); 
	}
	
	setInterval(function(){chat_ajax()}, 1000)
</script>

    </body>
</html>