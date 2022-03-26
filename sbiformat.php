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
         	<!-- AMFIRS Lender Wise Data -->		<h5 class="red-text" style="font-family: Orbitron;"><b>Data to be shared with SBI for cheque preparation</b></h5>		<?php				//Formatting returned results			echo "<table class='bordered'>";		//table  border='0' padding='0'			echo "<tr class='deep-purple lighten-4 deep-purple-text text-darken-2'>";				echo "<th>";					echo "SR_NUMBER";				echo "</th>";				echo "<th>";					echo "CUSTOMER_CODE";				echo "</th>";				echo "<th>";					echo "CUSTOMER_NAME";				echo "</th>";				echo "<th>";					echo "INSTRUMENT VALUE DATE";				echo "</th>";				echo "<th>";					echo "DEBIT_ACCOUNT_NO";				echo "</th>";				echo "<th>";					echo "PRODUCT_CODE";				echo "</th>";				echo "<th>";					echo "AMOUNT";				echo "</th>";				echo "<th>";					echo "BENEFICIARY_NAME";				echo "</th>";				echo "<th>";					echo "BENEFICIARY_IFSC";				echo "</th>";				echo "<th>";					echo "CREDIT_ACCOUNT_NO";				echo "</th>";				echo "<th>";					echo "BENEFICIARY ADDRESS LINE 1";				echo "</th>";				echo "<th>";					echo "BENEFICIARY ADDRESS LINE 2";				echo "</th>";				echo "<th>";					echo "BENEFICIARY ADDRESS LINE 3";				echo "</th>";				echo "<th>";					echo "CITY";				echo "</th>";				echo "<th>";					echo "DISTRICT";				echo "</th>";				echo "<th>";					echo "PIN CODE";				echo "</th>";				echo "<th>";					echo "REMARKS 1";				echo "</th>";				echo "<th>";					echo "REMARKS 2";				echo "</th>";				echo "<th>";					echo "REMARKS 3";				echo "</th>";				echo "<th>";					echo "REMARKS 4";				echo "</th>";				echo "<th>";					echo "REMARKS 5";				echo "</th>";				echo "<th>";					echo "ADDITIONAL FIELD 1";				echo "</th>";				echo "<th>";					echo "ADDITIONAL FIELD 2";				echo "</th>";				echo "<th>";					echo "ADDITIONAL FIELD 3";				echo "</th>";				echo "<th>";					echo "ADDITIONAL FIELD 4";				echo "</th>";				echo "<th>";					echo "ADDITIONAL FIELD 5";				echo "</th>";			echo "</tr>";	$slno = 0;	include 'dbconnectamfirs.php';	$sql = "SELECT * FROM mfirevised11 WHERE reviewNeeded = '0' AND district = 'Sivasagar' LIMIT 100"; //Query for data extraction	$result = $conn->query($sql);	if ($result->num_rows > 0) {	    while($row = $result->fetch_assoc()) {				$id = $row['id'];				$eligible = $row['eligible'];				$benName = $row['name'];				$address = $row['fulladdress'];				$district = $row['district'];				$pincode = $row['postalcode'];				$rem1 = $row['mfiname'];				$rem2 = $row['ref_num'];				$slno = $slno + 1;				echo "<tr><td>".$slno."</td><td>293688</td><td>AMFIRS 2021</td><td>01/12/2021</td><td>40477387225</td><td>MCC</td><td>".$eligible."</td><td>".$benName."</td><td></td><td></td><td>".$address."</td><td></td><td></td><td></td><td>".$district."</td><td>".$pincode."</td><td>".$rem1."</td><td>".$rem2."</td><td>".$id."</tr>";		}	   }		 else {		echo "0 results";	}?>  

	<div>		<!--<?php include 'footer.php'; ?>-->
	</div>      	  

</BODY>
</HTML>