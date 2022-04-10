<?php $title = "Search Results";
	include_once ("header.php"); ?>

	  <h2>Search Results</h2>

	  <br />
	  
	  <?php
	  		$searchtype=$_POST['searchtype'];
	  		
			require '../connections/readonly_mysql_connect.php'; // Connect to the database with read only user.
			
			try {
				$pdo = new PDO("mysql:host=$host;dbname=$db;charset=UTF8", $user, $pass);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
	  		$sql = "SELECT field1, field2, field3, category1, category2 FROM database_table_name WHERE category1 = '$searchtype' OR category2 = '$searchtype' ORDER BY field1 ASC";
	  		$result = $pdo->query($sql);
  		
  			echo "<p style=\"font-size:18px;padding-left:20px;\"><strong>Search Category: ".$searchtype."</strong></p><br />";
  		
  			include_once ("results_display.php");
  			
			}
			
			catch(PDOException $e)
			{
			    echo "Connection failed: " . $e->getMessage();
			}

	  		
		?>
	
<!--end-content-->
<!--end-main-->
<?php  include_once ("footer.php"); ?>
