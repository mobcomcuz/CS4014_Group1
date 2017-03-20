<?php
		include 'dbh.php';
	
		$sql= "SELECT * FROM task;";
		$result = $conn->query($sql);
		echo '<table><tr><td>Tasks</td>';
		while ($column = mysqli_fetch_array($result))
		{
		$id = $column['id'];
		$task_title = $column['task_title'];
		$task_type = $column['task_type'];
		$task_desc = $column['task_desc'];
		$task_tags = $column['task_tags'];
						
		echo  "<tr><td>$id</td><td>$task_title</td><td>$task_type<br></td><td>$task_desc</td><td>$task_tags</td></tr>";
		
		}
		
		echo "</table>";
			
		?>