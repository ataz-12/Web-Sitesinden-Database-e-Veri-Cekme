<!DOCTYPE html>
<html lang="en">
<head>
  <title>CENTRAL BANK OF THE ISLAMIC REPUBLIC OF IRAN</title>
  <meta charset="utf-8">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
	<script src='//code.jquery.com/jquery-2.1.4.min.js'></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
		<script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
		ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];</script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

	<?php
  session_start();
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
  }
?>

	<script>	
		<?php 
			  include("baglanti.php"); 
      
        if ($_POST) 
            {
			$tarih2= $_POST["tarih2"];
            $tarih1 = $_POST["tarih1"]; 
            }
 			$sql = "SELECT *  FROM [Test].[dbo].[C_B_IRAN]   WHERE   date>= '$tarih1' and date <='$tarih2' Order by date desc ";
			$data= sqlsrv_query( $conn,$sql);
		?>
		
	</script>
 <?php 
        include("menü.php"); 
    ?>

 <h3>           </h3>
<div class="container">
<form method="POST" class="input-append date form_datetime">
  <div class="form-row">
             <div class="form-group col-md-3">
Date 1:
  <input type="date" name="tarih1" class="form-control"> 
          </div>
            <div class="form-group col-md-3">
 Date 2: <input type="date" name="tarih2" class="form-control">
</div>

      <div class="col-auto"></br>
              <button  type="submit" id ="submit" name="submit" class="btn btn-primary ">Göster</button>
    </div>
</form>
<div style="overflow:auto;">
	    <?php
			if( $data === false)
				{
				die( print_r( sqlsrv_errors(), true) );
				}
				echo "  <table class='table table-hover  table-dark'>";
				echo "<thead class='thead-light'><tr>
    			<th>DATE</th>
    			<th>USD</th>
          <th>GBP</th> 
          <th>CHF</th>
          <th>SEK</th>
          <th>NOK</th>
          <th>DKK</th>
          <th>INR</th>
          <th>AED</th>
          <th>KWD</th>
          <th>PKR100</th>
          <th>JPY100</th>
          <th>HKD</th>
          <th>OMR</th>
          <th>CAD</th>
          <th>ZAR</th>
          <th>TRY</th>
          <th>RUB</th>
          <th>QAR</th>
          <th>IQD100</th>
          <th>SYP</th>
          <th>AUD</th>
          <th>SAR</th>
          <th>BHD</th>
          <th>SGD</th>
          <th>LKR10</th>
          <th>NPR100</th>
          <th>AMD100</th>
          <th>LYD</th>
          <th>CNY</th>
          <th>THB100</th>
          <th>MYR</th>
          <th>KRW1000</th>
          <th>EUR</th>
          <th>KZT100</th>
          <th>AFN</th>
          <th>BYN</th>
          <th>AZN</th>
          <th>TJS</th>
          <th>VEF</th>

					</tr></thead>";
				while($row = sqlsrv_fetch_array($data, SQLSRV_FETCH_NUMERIC))
				{
				echo "<tr>
        <td>". $row[0]->format('d/m/Y'). "</td>
        <td>" .$row[1]."</td>
        <td>" .$row[2]."</td>
        <td>" .$row[3]."</td>
        <td>" .$row[4]."</td>
        <td>" .$row[5]."</td>
        <td>" .$row[6]."</td>
        <td>" .$row[7]."</td>
        <td>" .$row[8]."</td>
        <td>" .$row[9]."</td>
        <td>" .$row[10]."</td>
        <td>" .$row[11]."</td>
        <td>" .$row[12]."</td>
        <td>" .$row[13]."</td>
        <td>" .$row[14]."</td>
        <td>" .$row[15]."</td>
        <td>" .$row[16]."</td>
        <td>" .$row[17]."</td>
        <td>" .$row[18]."</td>
        <td>" .$row[19]."</td>
        <td>" .$row[20]."</td>
        <td>" .$row[21]."</td>
        <td>" .$row[22]."</td>
        <td>" .$row[23]."</td>
        <td>" .$row[24]."</td>
        <td>" .$row[25]."</td>
        <td>" .$row[26]."</td>
        <td>" .$row[27]."</td>
        <td>" .$row[28]."</td>
        <td>" .$row[29]."</td>
        <td>" .$row[30]."</td>
        <td>" .$row[31]."</td>
        <td>" .$row[32]."</td>
        <td>" .$row[33]."</td>
        <td>" .$row[34]."</td>
        <td>" .$row[35]."</td>
        <td>" .$row[36]."</td>
        <td>" .$row[37]."</td>
        <td>" .$row[38]."</td>
        <td>" .$row[39]."</td>
        </tr>";
				}
				echo "</table>";
				sqlsrv_free_stmt($data);   
		?>
	 </div>
   </div>
</body>
</html>
