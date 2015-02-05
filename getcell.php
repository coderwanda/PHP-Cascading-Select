<?php


include("db.php");




$get_cell = mysqli_query($con,"SELECT * FROM  cells WHERE sectorcode ='".$_POST['sectorcode']."'");

	echo "<select name=\"codecell\" id=\"codecell\">";
	if(mysqli_fetch_array($get_cell)==0){
		echo "<option value=\"No Cell Available\">No Cell Available</option>";
	}else{
	
	    echo "<option value=\"\">------Select cell------</option>";
		while($row=mysqli_fetch_array($get_cell)){
			echo "<option value=\"".$row['codecell']."\">".$row['nameCell']."</option>";
		}
	}
	echo "</select><br>";
	?>
	
