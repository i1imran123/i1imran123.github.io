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
         	<!-- AMFIRS Lender Wise Data (Review Not Needed) -->		<h5 class="red-text" style="font-family: Orbitron;"><b>Lender Wise Data Receipt - Multi Lender</b></h5>		<?php				//Formatting returned results			echo "<table class='bordered'>";		//table  border='0' padding='0'			echo "<tr class='deep-purple lighten-4 deep-purple-text text-darken-2'>";				echo "<th>";					echo "Sl No";				echo "</th>";				echo "<th>";					echo "Lender";				echo "</th>";				echo "<th>";					echo "Number of LeadLender beneficiaries";				echo "</th>";				echo "<th>";					echo "Number of Lender2 beneficiaries";				echo "</th>";				echo "<th>";					echo "Number of Lender3 beneficiaries";				echo "</th>";			echo "</tr>";	$slno = 0;	$s_nob = 0;	//$s_outstanding = 0;	//$s_eligible = 0;			include 'dbconnectamfirs.php';	$sql = "SELECT LeadLender, COUNT(*) nob FROM mfi_phaseiii_multi  GROUP BY LeadLender ORDER BY LeadLender;"; //Query for data extraction	$result = $conn->query($sql);	if ($result->num_rows > 0) {	    while($row = $result->fetch_assoc()) {				$mfi	= $row['LeadLender'];				$nob	= $row['nob'];				//$outstandingMar = $row['outstandingMar'];				//$outstandingOct = $row['outstandingOct'];				//$eligible = $row['eligible'];				$slno = $slno + 1;				$s_nob = $s_nob + $nob;				//$s_outstandingMar = $s_outstandingMar + $outstandingMar;				//$s_outstandingOct = $s_outstandingOct + $outstandingOct;				//$s_eligible = $s_eligible + $eligible;				echo "<tr><td>".$slno."</td><td>".$mfi."</td><td>".$nob."</td><td></td><td></td></tr>";		}	   		echo "<tr><td></td><td>Total</td><td>".$s_nob."</td><td>".$s_outstandingMar."</td><td>".$s_outstandingOct."</td><td>".$s_eligible."</td></tr>";	}		 else {		echo "0 results";	}		?>
	<div>		<!--<?php include 'footer.php'; ?>-->
	</div>      	  

</BODY>
</HTML>