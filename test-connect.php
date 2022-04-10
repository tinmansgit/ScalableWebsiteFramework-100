<?php $title = "Database Connection Test"
	include_once ("header.html"); // HTML header file
	 ?> 

			<h2>Database Connection Test Result</h2>

			<?php
			require '../connections/readonly_mysql_connect.php'; // Connect to the database using read only permission script in readonly_mysql_connect.php. "connections" dir is one level above domain.com html dir.
			
			try {
				$pdo = new PDO("mysql:host=$host;dbname=$db;charset=UTF8", $user, $pass);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo "Connected successfully";
			}
			
			catch(PDOException $e)
			{
			    echo "Connection failed: " . $e->getMessage();
			}

			?>
			
			
		
<?php  include_once ("footer.html"); // HTML footer file
	?>
