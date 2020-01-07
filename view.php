<?php
require('sidebar.php');
?>

<!DOCTYPE html>
<html>

<style>
.collapsible {
  background-color: #6D7FCC;
  border-radius:5px;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none !important;;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #7386D5;
  outline: none;
}

.collapsible:after {
  content: '\002B';
  outline: none;
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
  outline: none;
}

.content {
  padding: 0 18px;
  outline: none;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}
</style>

<h1 style="padding:15px;"> View Tasks Page </h1>

<?php
	$taskquery = "SELECT * FROM `tasks`";
	$taskList = $conn->query($taskquery) or die($conn->error);;
	while($row = $taskList->fetch_assoc()) {
		echo '<button class="collapsible" style="font-size:25px;">' . $row["task_name"] . '</button>';
		echo '<div class="content">' . $row["task_description"] . '</div>';
		echo '<br></br>';
	}

?>


</div>
</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

</html>