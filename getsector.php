<?php

include("db.php");




$get_sector = mysqli_query($con,"SELECT * FROM  sectors WHERE districtcode ='".$_POST['districtcode']."'");

	echo "<select name=\"sectorcode\" id=\"sectorcode\">";
	if(mysqli_fetch_array($get_sector)==0){
		echo "<option value=\"No Sector Available\">No Sector Available</option>";
	}else{
	
	        echo "<option value=\"\">------Select sector------</option>";
		while($row=mysqli_fetch_array($get_sector)){
			echo "<option value=\"".$row['sectorcode']."\">".$row['namesector']."</option>";
		}
	}
	echo "</select><br>";
	?>
	
