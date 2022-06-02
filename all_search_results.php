<?php $title = "Search Results"; // Web Page Title
	include_once ("header.php"); // Web Page Header file
	?>

	  <h2>Search Results</h2>

	  <br />
	  
	  <?php
	  		$searchtype=$_POST['searchtype'];
	  		
			require '../connections/readonly_mysql_connect.php'; // Connect to the database with read only user.
			
			try {
				$pdo = new PDO("mysql:host=$host;dbname=$db;charset=UTF8", $user, $pass);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
	  		$sql = "SELECT field1, field2, field3, category1, category2 FROM database_table_name WHERE category1 = '$searchtype' OR category2 = '$searchtype' ORDER BY field1 ASC"; // SQL query structure
	  		$result = $pdo->query($sql);
  		
  			echo "<p style=\"font-size:18px;padding-left:20px;\"><strong>Search Category: ".$searchtype."</strong></p><br />";
  		
  			include_once ("results_display.php"); // Layout for sql query results
  			
			}
			
			catch(PDOException $e)
			{
			    echo "Connection failed: " . $e->getMessage(); // Error message if connection to database fails
			}

	  		
		?>
	
<!--end-content-->
<!--end-main-->
<?php  
	include_once ("footer.php"); // Web Page Footer file
	?>
