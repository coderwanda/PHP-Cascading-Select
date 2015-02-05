<?php


include("db.php");




$get_district = mysqli_query($con,"SELECT * FROM  districts WHERE provincecode ='".$_POST['provincecode']."'");

	echo "<select name=\"districtcode\" id=\"districtcode\">";
	if(mysqli_fetch_array($get_district)==0){
		echo "<option value=\"No District Available\">No District Available</option>";
	}else{
            echo "<option value=\"\">------Select district------</option>";
		while($row=mysqli_fetch_array($get_district)){
			echo "<option value=\"".$row['districtcode']."\">".$row['namedistrict']."</option>";
		}
	}
	echo "</select><br>";
	?>
	
