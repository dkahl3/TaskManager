<?php
require('sidebar.php');
?>

<!DOCTYPE html>
<html>
</body>

<?php
	
	if(isset($_POST["new"])){
		$sqlNew = "INSERT INTO tasks(task_name, task_description) VALUES ('". $_POST["tName"] ."','". $_POST["tDesc"]."')";
			
		if ($conn->query($sqlNew) === TRUE) {
			echo "New record created successfully";
			header("Location: add.php");
		} else {
			echo "Error: " . $sqlNew . "<br>" . $conn->error;
		}
	}
	else {
	?>

<h1 style="padding:15px;"> Add Tasks </h1>

<!-- Forms: Task name and description -->
<div style="padding:15px;border-style: solid;border-radius:5px;border-color:#7386D5;">	
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	  <div class="form-group">
		<label for="taskName">Task Name</label>
		<input type="text" class="form-control" id="taskName" name="tName" aria-describedby="task" placeholder="Enter task">
	  </div>
	  <div class="form-group">
		<label for="taskDescription">Task Description</label>
		<textarea class="form-control" id="taskDescription" name="tDesc" rows="3" placeholder="Enter description"></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary" name="new">Submit</button>
	</form>
</div>
<?php }?>
</body>


</div>
</div>

</html>