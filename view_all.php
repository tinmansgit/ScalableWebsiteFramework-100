<?php $title = "Page Title - View All Entries In Database";
	include_once ("header.php"); ?>
	  <h2>Complete Database</h2>
	 <br />
		<?php
			require '../connections/readonly_mysql_connect.php'; // Connect to the database with read only user.
			try {
				$pdo = new PDO("mysql:host=$host;dbname=$db;charset=UTF8", $user, $pass);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "SELECT field1, category1, category2, field2, field3, field4 FROM database_table_name ORDER BY field1 ASC";
	  		$result = $pdo->query($sql);
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
