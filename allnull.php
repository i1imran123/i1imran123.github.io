<!doctype html>
<HTML>
<HEAD>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    		<meta name="author" content="Rashsul Hussain, Guwahati, India">		<title>AMFIRS Monitoring System</title>
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
		<script src="js/materialize.min.js"></script></HEAD>
<BODY>	<?php         // Turn off all error reporting        error_reporting(0);
        include 'header.php'; 
        ?>
	<div class="container">
    	<?php include 'menu.php'; ?>
         	<!-- AMFIRS - All NULL Data -->		<h5 class="red-text" style="font-family: Orbitron;"><b>Beneficiaries with all data NULL</b></h5>		<?php				//Formatting returned results			echo "<table class='bordered'>";		//table  border='0' padding='0'			echo "<tr class='deep-purple lighten-4 deep-purple-text text-darken-2'>";				echo "<th>";					echo "Sl No";				echo "</th>";				echo "<th>";					echo "ID";				echo "</th>";				echo "<th>";					echo "MFI Name";				echo "</th>";				echo "<th>";					echo "Reference Number of MFI";				echo "</th>";				echo "<th>";					echo "Beneficiary Name";				echo "</th>";				echo "<th>";					echo "Amount (Rs)";				echo "</th>";				echo "<th>";					echo "District";				echo "</th>";				echo "<th>";					echo "Full Address";				echo "</th>";			echo "</tr>";	$slno = 0;	$sumEligible = 0;	include 'dbconnectamfirs.php';	$sql = "SELECT * FROM `mfirevised11` WHERE voterid IS NULL AND pancard IS NULL AND rationcard IS NULL AND mobile IS NULL"; //Query for data extraction	$result = $conn->query($sql);	if ($result->num_rows > 0) {	    while($row = $result->fetch_assoc()) {				$id = $row['id'];				$eligible = $row['eligible'];				$benName = $row['name'];				$address = $row['fulladdress'];				$district = $row['district'];				$mfi = $row['mfiname'];				$mfiRef = $row['ref_num'];				$slno = $slno + 1;				$sumEligible = $sumEligible + $eligible;				echo "<tr><td>".$slno."</td><td>".$id."</td><td>".$mfi."</td><td>".$mfiRef."</td><td>".$benName."</td><td>".$eligible."</td><td>".$district."</td><td>".$address."</td></tr>";		}		echo "Total Amount = ".$sumEligible;	   }		 else {		echo "0 results";	}?>  

	<div>		<!--<?php include 'footer.php'; ?>-->
	</div>      	  

</BODY>
</HTML>