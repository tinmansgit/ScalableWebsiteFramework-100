<?php
while ($row = $result->fetch())
	{ echo 
	  "<table style=\"font-size:18px;margin:0px;padding:1px;width:100%;border:1px solid #000000;\">
  		<tr>
  		<td style=\"background-color:#228B22;color:#FFFFFF;text-align:left;border:0px;padding:5px;border-bottom:1px solid #000000;\"><strong>".$row['field1']."</strong></td>
  		</tr>
  		<tr>
  		<td style=\"font-style:italic;text-align:left;border:0px;padding:1px;padding-left:10px;\">".$row['category1']."";			
  		if (!empty ($row['category2']))
  			echo ", ".$row['category2']."";			
  		echo "</td>
  		</tr>
  		<tr>
  		<td style=\"text-align:left;border:0px;padding:1px;padding-left:10px;\">".$row['field2']."</td>
  		</tr>
  		<tr>
  		<td style=\"text-align:left;border:0px;padding:1px;padding-left:10px;\">".$row['field3']."</td>
  		</tr>
  		</tr>";		
  		if (!empty ($row['field4']))
  		echo "<tr>
		<td style=\"text-align:left;border:0px;padding:1px;padding-left:10px;\"><a href=\"http://".$row['url_field']."\" target=\"_blank\">Website</a></td>
		</tr>";	
  		echo "</table><br />";
  		}		
?>
