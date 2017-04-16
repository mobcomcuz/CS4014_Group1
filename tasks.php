<?php
session_start();
		if(!$_SESSION['loggedIn']) {
		header("location:index1.php"); 
		die(); 
		}
		include 'dbh.php';
	
		$sql= "SELECT * FROM task;";
		$result = $conn->query($sql);
		echo '<table cellspacing="20" cellpadding="3"><tr><th>Tasks</th>
		<th>Title</th>
		<th>Type</th>
		<th>Description</th>
		<th></th>
		<th></th>
		<th>Tags</th>
		<th></th>
		<th>Page count</th>
		<th>Word count</th>
		<th>File format</th>';
		while ($column = mysqli_fetch_array($result))
		{
		$task_id = $column['task_id'];
		$task_title = $column['task_title'];
		$task_type = $column['task_type'];
		$task_desc = $column['task_desc'];
		$task_tags = $column['task_tags'];
		$page_count = $column['page_count'];
		$word_count = $column['word_count']; 
		$file_format = $column['file_format'];
						
		echo  "<tr><td>$task_id</td>
		<td>$task_title</td>
		<td>$task_type</td>
		<td>$task_desc</td>
		<td></td>
		<td></td>
		<td>$task_tags</td>
		<td></td>
		<td>$page_count</td>
		<td>$word_count</td>
		<td>$file_format</td></tr>";
		
		}
		
		echo "</table>";
			
		?>