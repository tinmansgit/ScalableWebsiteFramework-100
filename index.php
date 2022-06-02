<?php $title = "Individual Web Page Titles Go Here"; // Web Page Title
	include_once ("header.php"); // Web Page Header file
	?> 
		<div>
		<center>
		<h2>Page Header</h2>
		</center>
		</div>
		<br />
		<p style="font-size:18px;">Paragraph 1<br />
		<br />
		<h2>Database Title</h2>  
		<br />
		
		<?php
			require '../connections/readonly_mysql_connect.php'; // Connect to the database as a read only user.
			
			try {
				$pdo = new PDO("mysql:host=$host;dbname=$db;charset=UTF8", $user, $pass);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				$sql = "SELECT field1, field2, field3 FROM database_table_name ORDER BY RAND() LIMIT 5"; // SQL query structure
	  		$result = $pdo->query($sql);
  		
  			include_once ("results_display.php"); // Layout for sql query results
  			
	  		}
	  		
	  		catch(PDOException $e)
			{
			    echo "Connection failed: " . $e->getMessage(); // Error message if connection to database fails
			}
		?>
		
		<br />
		<br />
		
<?php  
	include_once ("footer.php"); // Web Page Footer file
	?> 
