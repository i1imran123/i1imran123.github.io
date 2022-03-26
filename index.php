<!doctype html>
<HTML>
<HEAD>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    	<meta name="author" content="Rashsul Hussain, Guwahati, India">
		
		<title>AMFIRS Monitoring System</title>

		<!-- CSS  -->
		<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="icon" type="image/ico" href="./images/favicon.png" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Michroma" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Orbitron" />
		<link rel="manifest" href="manifest.json">
		<link rel="apple-touch-icon" href="images/launcher-icon-0-75x.png" />
		
		
		<!--  Scripts-->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/init.js"></script>
		<script src="js/materialize.min.js"></script>
 
</HEAD>
<BODY>
    
	<?php 
        // Turn off all error reporting
        error_reporting(0);
        include 'header.php'; 
        ?>
	
<div class="container">
    	<?php include 'menu.php'; ?>
            
        <!-- AMFIRS -->
	<h5 class="red-text" style="font-family: Orbitron;"><b>ATSIS, 2020</b></h5>
	<h6 class="blue-text" style="font-family: Orbitron;"><b>Deatils of Tea Garden registered for grant</b></h6>
	
	<?php
	
			//Formatting returned results
			echo "<table class='bordered'>";		//table  border='0' padding='0'
			echo "<tr class='deep-purple lighten-4 deep-purple-text text-darken-2'>";
			echo "<td>Parameter</td><td>Number</td></tr>";	
			

			include 'dbconnectamfirs.php';
			
			$sql = "SELECT count(*) AS nob FROM mfi_phaseiii_single"; //Query for data extraction
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
	    		while($row = $result->fetch_assoc()) {
				$nob = $row['nob'];
				echo "<tr><td>Number of beneficiaries</td><td>".$nob."</td></tr>";
			}
			}	
	 		else {
				echo "0 results";
			}

			
			
			$sql3 = "SELECT sum(eligibleAsPerLender) AS eligible FROM mfi_phaseiii_single"; //Query for data extraction
			$result3 = $conn->query($sql3);
			if ($result3->num_rows > 0) {
	    		while($row = $result3->fetch_assoc()) {
				$eligible = $row['eligible'];
				echo "<tr><td>Total Eligible Amount as per lender</td><td>".$eligible."</td></tr>";
			}
			}	
	 		else {
				echo "0 results";
			}

	
			
			$sql6 = "SELECT COUNT(DISTINCT mfiname) AS mfi FROM mfi_phaseiii_single"; //Query for data extraction
			$result6 = $conn->query($sql6);
			if ($result6->num_rows > 0) {
	    		while($row = $result6->fetch_assoc()) {
				$mfi = $row['mfi'];
				echo "<tr><td>Number of MFI</td><td>".$mfi."</td></tr>";
			}
			}	
	 		else {
				echo "0 results";
			}

			
			$sql7 = "SELECT COUNT(DISTINCT district) AS district FROM mfi_phaseiii_single"; //Query for data extraction
			$result7 = $conn->query($sql7);
			if ($result7->num_rows > 0) {
	    		while($row = $result7->fetch_assoc()) {
				$district = $row['district'];
				echo "<tr><td>Number of District</td><td>".$district."</td></tr>";
			}
			}	
	 		else {
				echo "0 results";
			}

	
	echo "</table>";

?>

	<div>
	
	<?php include 'footer.php'; ?>

	</div> 
	

</BODY>
</HTML>