<html>
	<head>
		<style>
			#hr{
				width:40%;
			}
			.text{
				margin-left:10px;
			}
			
			div{
		      background: -webkit-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
			  margin: auto;
			  position: relative;
			  width: 550px;
			  font-family: Tahoma, Geneva, sans-serif;
			  font-size: 14px;
			  line-height: 24px;
			  font-weight: bold;
			  text-decoration: none;
			  border-radius: 10px;
			  padding: 10px;
			  border: 1px solid #999;
			}
			.time{
				float:right;
				
			}
		</style>
	</head>
	<body>
		<?php
		    $title=$body = $time="";
			// Create connection
			// Create connection
			require_once('connection.php');
			
			// Perform queries 
			$result = $con->query("SELECT * from blog");
			
			// print the result
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$title=$row["title"];
					$body=$row["body"];
					$time=$row["created_at"];
					?>
					<div>
					<h2 class="text "><?php echo $title; ?></h2>
					<h5 class="text  time"><?php echo $time; ?></h5>
					<h4 class="text"><?php echo $body; ?></h4>
					</div>
					<br>
					<hr id="hr">
					</br>
					<?php
				}
			}
			//close connection
			$con->close();
		?>

		
	</body>
</html>