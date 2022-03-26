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
         	<!-- AMFIRS District Wise Data (Review Not Needed -->		<h5 class="red-text" style="font-family: Orbitron;"><b> ATSIS 2020, District Wise Data of Tea Garden</b></h5>		<?php				//Formatting returned results			echo "<table class='bordered'>";		//table  border='0' padding='0'			echo "<tr class='deep-purple lighten-4 deep-purple-text text-darken-2'>";				echo "<th>";					echo "Sl No";				echo "</th>";				echo "<th>";					echo "District Name";				echo "</th>";				echo "<th>";					echo "Number of beneficiaries";				echo "</th>";				echo "<th>";					echo "Total Outstanding Amount as on 31st March 2021 (Rs)";				echo "</th>";				echo "<th>";					echo "Total Outstanding Amount as on 31st October 2021 (Rs)";				echo "</th>";				echo "<th>";					echo "Total Eligible Amount (Rs)";				echo "</th>";		echo "</tr>";	$slno = 0;	$s_nob = 0;	$s_outstanding = 0;	$s_eligible = 0;			include 'dbconnectamfirs.php';	$sql = "SELECT district, COUNT(*) nob, SUM(totalOutstanding_31Mar) outstandingMar, SUM(totalOutstanding_31Oct) outstandingOct, SUM(eligibleAsPerLender) eligible FROM mfi_phaseiii_single GROUP BY district ORDER BY district"; //Query for data extraction	$result = $conn->query($sql);	if ($result->num_rows > 0) {	    while($row = $result->fetch_assoc()) {				$dis	= $row['district'];				$nob	= $row['nob'];				$outstandingMar = $row['outstandingMar'];				$outstandingOct = $row['outstandingOct'];				$eligible = $row['eligible'];				$slno = $slno + 1;				$s_nob = $s_nob + $nob;				$s_outstandingMar = $s_outstandingMar + $outstandingMar;				$s_outstandingOct = $s_outstandingOct + $outstandingOct;				$s_eligible = $s_eligible + $eligible;				echo "<tr><td>".$slno."</td><td>".$dis."</td><td>".$nob."</td><td>".$outstandingMar."</td><td>".$outstandingOct."</td><td>".$eligible."</td></tr>";		}	   		echo "<tr><td></td><td>Total</td><td>".$s_nob."</td><td>".$s_outstandingMar."</td><td>".$s_outstandingOct."</td><td>".$s_eligible."</td></tr>";	}		 else {		echo "0 results";	} ?></div><div><!-- AMFIRS District Wise Data (Review Needed 		<h5 class="red-text" style="font-family: Orbitron;"><b>District Wise Data - Category 1.2</b></h5>-->		<?php				//Formatting returned results			/*echo "<table class='bordered'>";		//table  border='0' padding='0'			echo "<tr class='deep-purple lighten-4 deep-purple-text text-darken-2'>";				echo "<th>";					echo "Sl No";				echo "</th>";				echo "<th>";					echo "District Name";				echo "</th>";				echo "<th>";					echo "Number of beneficiaries";				echo "</th>";				echo "<th>";					echo "Total Outstanding Amount (Rs)";				echo "</th>";				echo "<th>";					echo "Total Eligible Amount (Rs)";				echo "</th>";/*			echo "</tr>";	$slno = 0;	$s_nob = 0;	$s_outstanding = 0;	$s_eligible = 0;			include 'dbconnectamfirs.php';	$sql = "SELECT district, COUNT(*) nob, SUM(Borrower_total_OS) outstanding, SUM(eligible) eligible FROM mfirevised12 WHERE Phase IS NULL GROUP BY district ORDER BY district"; //Query for data extraction	$result = $conn->query($sql);	if ($result->num_rows > 0) {	    while($row = $result->fetch_assoc()) {				$dis	= $row['district'];				$nob	= $row['nob'];				$outstanding = $row['outstanding'];				$eligible = $row['eligible'];				$slno = $slno + 1;				$s_nob = $s_nob + $nob;				$s_outstanding = $s_outstanding + $outstanding;				$s_eligible = $s_eligible + $eligible;				echo "<tr><td>".$slno."</td><td>".$dis."</td><td>".$nob."</td><td>".$outstanding."</td><td>".$eligible."</td></tr>";		}	   		echo "<tr><td></td><td>Total</td><td>".$s_nob."</td><td>".$s_outstanding."</td><td>".$s_eligible."</td></tr>";	}		 else {		echo "0 results";	} */?>  
</div>
	<div>		<!--<?php include 'footer.php'; ?>-->
	</div>      	  

</BODY>
</HTML>