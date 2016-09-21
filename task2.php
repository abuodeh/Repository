<html>
	<head>
		<style>
			p{
				margin-left:20px;
				font-size:18px;
			}
			.input{
				margin-left:5%;
				margin-right:5%;
				border: 2px solid #555;
				border-radius:4px;
				width:90%;
				height:30px;
				display:inline;
				padding: 4px 20px;
				background-color: #f8f8f8;
			}
			textarea {
				width: 90%;
				height: 150px;
				padding: 10px 20px;
				box-sizing: border-box;
				border: 2px solid #555;
				border-radius: 4px;
				background-color: #f8f8f8;
				resize: none;
				margin-left:5%;
				margin-right:5%;
				
			}
			
			#submit{
				margin-left:30px;
				border-radius:4px;
				width:100px;
				border: 2px solid #bbb;
				font-family: Tahoma, Geneva, sans-serif;
			    font-size: 14px;
			    line-height: 24px;
			    font-weight: bold;
				padding:5px;
			}
			form {
			  background: -webkit-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
			  margin: auto;
			  position: relative;
			  width: 550px;
			  height: 450px;
			  font-family: Tahoma, Geneva, sans-serif;
			  font-size: 14px;
			  line-height: 24px;
			  font-weight: bold;
			  text-decoration: none;
			  border-radius: 10px;
			  padding: 10px;
			  border: 1px solid #999;
			}
			
			</style>
	</head>
	<body>
		<?php
			$title=$body= "";
			
			//check  the variables are set at all
			if (isset($_POST["title"]) && isset($_POST["body"]))
			{
				$title = $_POST["title"];
				$body = $_POST["body"];
				
				// Create connection
				require_once('connection.php');
				
				
				
				// prepare and bind
				$insert = $con->prepare("INSERT into `blog` (`title`, `body`)  VALUES( ?,?)");
				mysqli_stmt_bind_param($insert, "ss", $title,$body);
				
				//execute
				$flag_insert = mysqli_stmt_execute($insert);
				
				//check if the insertion done without error
				if ($flag_insert) {
					//close connection
					$con->close();
					header("location: task1.php");
				}
				else{
					echo"ERROR insert";
					//close connection
					$con->close();
				}
			}
		?>
		
			<form method="post" action="task2.php" >
				
				<p>title :</p>
				<input name="title" type="text" class="input" required >
				<br>
				<p>body :</p>
				<textarea rows="4" name="body" required ></textarea>
				<br>
				<br>
				<input type="submit" value="Submit" id="submit">
			</form>
		
	</body>
</html>
