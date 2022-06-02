<?php $title = "Page Title Here";
	include_once ("header.html"); // HTML header file
	 ?> 

			<h2>Test Connect Result</h2>

			<?php
			require '../connections/readonly_mysql_connect.php'; // Connect to the database using read only permission script in readonly_mysql_connect.php. "connections" dir is one level above domain.com html dir.
			
			try {
				$pdo = new PDO("mysql:host=$host;dbname=$db;charset=UTF8", $user, $pass);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo "Connected successfully"; // Successfull connection to database message
			}
			
			catch(PDOException $e)
			{
			    echo "Connection failed: " . $e->getMessage(); // Error message if connection to database fails
			}

			?>
			
			
		
<?php  include_once ("footer.html"); // HTML footer file
	?>
