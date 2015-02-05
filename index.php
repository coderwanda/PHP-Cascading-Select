<?php


include("db.php");



$get_province = mysqli_query($con,"SELECT * FROM provinces");



?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<head>

<title>Cascading selects</title>

    
      <script type="text/javascript">
	  
	  //Get districts list
	function showResult(){
		var provincecode=document.getElementById('provincecode').value;
		var params = "&provincecode="+provincecode+"";
		http=new XMLHttpRequest();
		http.open("POST","getdistrict.php",true);
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
		http.send(params);
		http.onreadystatechange = function() 
		{//Call a function when the province changes.
			
		document.getElementById("districtcode").innerHTML=http.responseText;
				
		if(document.getElementById('districtcode').value!=="No District Available")
		document.post_form.name.disabled=false;
		
		}		
	}
	    
		
	    //Get sectors list
		function showResult2(){
		var districtcode=document.getElementById('districtcode').value;
		var params = "&districtcode="+districtcode+"";
		http=new XMLHttpRequest();
		http.open("POST","getsector.php",true);
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
		http.send(params);
		http.onreadystatechange = function() 
		{//Call a function when the district changes.
			
		document.getElementById("sectorcode").innerHTML=http.responseText;
				
		if(document.getElementById('sectorcode').value!=="No Sector Available")
		document.post_form.name.disabled=false;
		
		}		
	}
	
	//Get cell list
		function showResult3(){
		var sectorcode=document.getElementById('sectorcode').value;
		var params = "&sectorcode="+sectorcode+"";
		http=new XMLHttpRequest();
		http.open("POST","getcell.php",true);
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
		http.send(params);
		http.onreadystatechange = function() 
		{//Call a function when the sector changes.
			
		document.getElementById("codecell").innerHTML=http.responseText;
				
		if(document.getElementById('codecell').value!=="No Cell Available")
		document.post_form.name.disabled=false;
		
		}		
	}
	
	//Get Villages list
		function showResult4(){
		var codecell=document.getElementById('codecell').value;
		var params = "&codecell="+codecell+"";
		http=new XMLHttpRequest();
		http.open("POST","getvillage.php",true);
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
		http.send(params);
		http.onreadystatechange = function() 
		{//Call a function when the cell changes.
			
		document.getElementById("CodeVillage").innerHTML=http.responseText;
				
		if(document.getElementById('CodeVillage').value!=="No village Available")
		document.post_form.name.disabled=false;
		
		}		
	}
</script>







</head>
<body >

<pre>


                                 <h3 align="center"> Cascading select from: Province - Village</h3>
							
								 
								<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="form" id="form" >
								 
															 
								Province: <select name="provincecode"  id="provincecode" onchange="showResult();" style="width:150px">
																<option value="">----Select province----</option>
																<?php while($show_province = mysqli_fetch_array($get_province)) { ?>
																<option value="<?php echo $show_province['provincecode'] ?>"><?php echo $show_province['provincename'] ?></option>
																<?php } ?>
															  </select>
															  &nbsp;
																		  
								District: <select name="districtcode" id="districtcode" class="entrytext" onchange="showResult2();" style="width:150px">
																			<option ></option>
																		  </select>
																		  
								Sector:   <select name="sectorcode" id="sectorcode" class="entrytext" onchange="showResult3();" style="width:150px">
																			<option> </option>
																		  </select>
																		  
								Cell:     <select name="codecell" id="codecell" class="entrytext" onchange="showResult4();" style="width:150px">
																			<option> </option>
																		  </select>
									
								Village:  <select name="CodeVillage" id="CodeVillage" class="entrytext"  style="width:150px">
																			<option> </option>
																		  </select>
												
															
								</form/>
								 </pre>
								
								
</body></html>
