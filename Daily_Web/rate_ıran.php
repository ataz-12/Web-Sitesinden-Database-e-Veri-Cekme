<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rate Iran  Chart</title>
  <meta charset="utf-8">
<meta http-equiv="content-type" content="text/plain; charset=UTF-8"/>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  <style>
     @import 'https://fonts.googleapis.com/css?family=Open+Sans:300';
       #myChart-wrapper{
       margin:auto;
        }
         display: none;
        }</style>
<script type="text/javascript" src="http://paracevirici.com/servis/widget/widget.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 
</head>
<body>
	<?php
  session_start();
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
  }
?>
		<?php
	include("baglanti.php");
			
		?>

 <?php 
        include("menü.php"); 
    ?>
<div class="container">

<form name="my-form" method="POST" > 

           <div class="form-row">
             <div class="form-group col-md-3">
Date 1:
<input type="date" name="tarih1" class="form-control" '> 
          </div>
            <div class="form-group col-md-3">
 Date 2: <input type="date" name="tarih2" class="form-control" >
</div>
<?php
$DummyArray1 = array("select","USD","GBP","CHF","SEK","NOK","DKK","INR","AED","KWD","PKR100","JPY100","HKD","OMR","CAD","ZAR","TRY","RUB","QAR","IQD100","SYP","AUD","SAR","BHD","SGD","LKR10","NPR100","AMD100","LYD","CNY","THB100","MYR","KRW1000","EUR","KZT100","AFN","BYN","AZN","TJS","VEF");
 $Value1= 0;
if(isset($_POST['submit']))
{

             
    $Value1 = $_POST['a']; //
 
}
 ?>
 
 <div class="form-group col-md-3">
  Money 1: <select name="a" id="a" class="form-control" >
    
       <?php
    for($i = 0; $i < count($DummyArray1) ; $i++){
      echo  '<option value="'.$i.'"';
      if( $Value1 == $i){
        echo ' selected="selected"';
      }
      echo '>'.$DummyArray1[$i].'</option>';
    }
    ?>

                   </select>
</div>
<?php
$DummyArray = array("select","USD","GBP","CHF","SEK","NOK","DKK","INR","AED","KWD","PKR100","JPY100","HKD","OMR","CAD","ZAR","TRY","RUB","QAR","IQD100","SYP","AUD","SAR","BHD","SGD","LKR10","NPR100","AMD100","LYD","CNY","THB100","MYR","KRW1000","EUR","KZT100","AFN","BYN","AZN","TJS","VEF");
 $Value= 0;
if(isset($_POST['submit']))
{

    $Value = $_POST['b']; //
 
}
 ?>
<div class="form-group col-md-3">
   Money 2: <select name="b" id="b"class="form-control" >
       <?php
    for($j = 0; $j < count($DummyArray) ; $j++){
      echo  '<option value="'.$j.'"';
      if( $Value == $j){
        echo ' selected="selected"';
      }
      echo '>'.$DummyArray[$j].'</option>';
    }
    ?>
                   </select></div>
    
    <div> 
      <button  type="submit" id ="submit" name="submit" class="btn btn-primary  my-2 my-sm-0" value="submit">
        Göster
      </button>  
  <a href="ıran_c_b_chart.php"><button type="button" class="btn btn-danger my-2 my-sm-0">Chart</button></a>
<button  onclick="exportTableToExcel('tblData')" id="excel" name="excel" class="btn btn-warning  my-2 my-sm-0"> Export to Excel</button>

<script type="text/javascript">
function exportTableToExcel(tblData, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tblData);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>



</div>
</div>
		 </form>
<table id='tblData' class='table table-hover  table-dark'>
<thead class='thead-light'><tr align='center'>
<?php 
if (isset($_POST['submit']) )
            {
              $tarih1 = $_POST["tarih1"]; 
              $tarih2= $_POST["tarih2"];
              $a = $_POST["a"]; 
              $b= $_POST["b"];

$sql2 = 
"SELECT * 
FROM [Test].[dbo].[C_B_IRAN]  
  WHERE   date>= '$tarih1' and date <='$tarih2' Order by date desc ";
        $data1= sqlsrv_query( $conn,$sql2);
     

 
      if( $data1 === false)
        {
        die( print_r( sqlsrv_errors(), true) );
        }
      
        echo "
          <th>DATE</th>
          <th></th>
          <th></th>
          </tr></thead>";
        while($row = sqlsrv_fetch_array($data1))
        {
      echo "<tr align='center'>
      <td >".$row["date"]->format('d/m/Y')."</td>
     <td>".$row["$Value1"]/$row["$Value"]."</td>
       <td>".$row["$Value"]/$row["$Value1"]."</td>
      </tr>"; 
        }
        echo "";
        sqlsrv_free_stmt($data1);   }
    ?></table> </div>

   
</body>
</html>