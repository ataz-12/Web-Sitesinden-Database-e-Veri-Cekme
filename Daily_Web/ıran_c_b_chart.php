<!DOCTYPE html>
<html lang="en">
<head>
  <title>Currency Iran Chart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>		
  <script src='//code.jquery.com/jquery-2.1.4.min.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
    <script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];</script>


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
  <?php
  session_start();
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
  }
?>
</head>
<body>

    <?php 
        include("menü.php"); 
    ?>

<div class="container">
 <script type="text/javascript">
    <?php
  include("baglanti.php");
      
    ?>
    <?php if (isset($_POST['submit'])) 
            {
              $tarih1 = $_POST["tarih1"]; 
            
            
            }
            if (isset($_POST['submit'])) 
            {
              $tarih2 = $_POST["tarih2"]; 
            
            
            }
$sql = "SELECT * FROM [Test].[dbo].[C_B_IRAN]  WHERE   date>= '$tarih1' and date <='$tarih2' Order by date asc ";
      $data= sqlsrv_query( $conn,$sql); 
        ?>  
</script>
 <form name="my-form" method="POST" action="ıran_c_b_chart.php" > 

           <div class="form-row">
             <div class="form-group col-md-3">
Date 1:
<input type="date" id="tarih1" name="tarih1" class="form-control" '> 
          </div>
            <div class="form-group col-md-3">
 Date 2: <input type="date"  id="tarih2" name="tarih2" class="form-control" >
</div>
<?php
$DummyArray1 = array("select ","USD","GBP","CHF","SEK","NOK","DKK","INR","AED","KWD","PKR100","JPY100","HKD","OMR","CAD","ZAR","TRY","RUB","QAR","IQD100","SYP","AUD","SAR","BHD","SGD","LKR10","NPR100","AMD100","LYD","CNY","THB100","MYR","KRW1000","EUR","KZT100","AFN","BYN","AZN","TJS","VEF");
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
    
    
</div><div> 
      <button  type="submit" id ="submit" name="submit" class="btn btn-primary  my-2 my-sm-0" value="submit">
        Göster
      </button> 
 <button type="submit"  value="submit" id="export" name="export" class="btn btn-info my-2 my-sm-0" >Image</button>
<script type="text/javascript">
  
document.getElementById('export').addEventListener('click', function() {
   zingchart.exec('currency_ıran_c_b', 'getimagedata', {
       filetype : 'png',
       callback : function(imagedata) {
           console.log(imagedata);
           document.getElementById('output_image').src = imagedata;
       }
   });  
});
</script>
</div> 
     </form>
    <div id="currency_ıran_c_b"></div>
      <img src="" id="output_image">
		
	  </div><?php
    $data= sqlsrv_query( $conn,$sql);
    ?>
                    
  <script >
  var DataCurrency=[
    <?php 
      while($info=sqlsrv_fetch_array($data))
        echo $info["$Value1"]/$info["$Value"].',';
    ?>];
    <?php
      $data= sqlsrv_query( $conn,$sql);
    ?>
  var LabelsCurrency=[
    <?php 
      while($info=sqlsrv_fetch_array($data))
         echo '"'. $info[0]->format('d/m/Y').'",'; 
    ?>];

  
  
  </script>

    <?php
       sqlsrv_close($conn);
    ?>
<script type="text/javascript">


var stockState = {
  current: '2Y',
  dates: LabelsCurrency,
  closes: DataCurrency
 
};

function getCloseConfig(dates, closes, current) {
  return {
  type: 'line',
  backgroundColor: "#333",
  height: 420,
  x: 0, 
  y: 0,
  crosshairX:{
    shared: true,
    plotLabel:{
      backgroundColor: "#bbb",
      fontColor: "#222",
      text: "Currency: %v",
      fontFamily: "Open Sans",
      y:0,
    },
    scaleLabel:{
      fontColor: "#222",
      fontFamily: "Open Sans",
      backgroundColor: "#bbb",
    }
  },
  title: {
    text: "Currency Iran Chart",
    fontColor: "#fff",
    fontFamily: 'Open Sans',
    fontSize: 30,
    align: 'left',
    offsetX: 10
  },
  zoom: {
    shared: true
  },
  plotarea: {
    margin: "60 50 40 50"
  },
  plot: {
    marker:{
      visible: false
    }
  },
  tooltip:{
    text: "Currency: %v",
    backgroundColor: "#BBB",
    borderColor:"transparent"
  },
  scaleY: {
    guide: {
      visible: true,
      lineStyle: 'solid',
      lineColor: "#444"
    },
    values: "0:100:20",
    item: {
      fontColor: "#ddd",
      fontFamily: "Open Sans"
    }
  },
  scaleX: {
    guide: {
      visible: true,
      lineStyle: 'solid',
      lineColor: "#444"
    },
    values: dates,
    transform: {
      type: 'date',
      all: '%m/%d/%y'  
    },
    zooming:{
      shared: true
    },
    item: {
      fontColor: "#ddd",
      fontFamily: "Open Sans"
    }
  },
  series : [
    {
      values: closes,
      lineColor: "#fff",
      lineWidth: 1,
      backgroundColor:"#909090 #313131"
    }
  ],
 
};
}

function getVolumeConfig(dates, values) {
  return {
  type: 'bar',
  height: 100,
  x: 0, 
  y: 400,
  backgroundColor: "#333",
  plotarea: {
    margin: "20 50 20 50"
  },
  source: {
    text: "sponsor.com",
    fontColor:"#ddd",
    fontFamily: "Open Sans"
  },
  tooltip:{
    visible: false,
    text: "Currency: %v",
    fontFamily: "Open Sans",
    borderColor:"transparent"
  },
  zoom: {
    shared: true
  },
  crosshairX:{
    shared: true,
    scaleLabel:{
      visible: false
    },
    plotLabel:{
      fontFamily: "Open Sans",
      backgroundColor:"#BBB",
      text: "Rate: %v",
      y:0
    }
  },
  scaleX: {
    visible: false,
    zooming: true
  },
  scaleY: {
    visible: false
  },
  series : [
    {
      values: values,
      text: "Rate",
      backgroundColor: "#bbb"
    }
  ]
};
}

zingchart.render({
  id: 'currency_ıran_c_b',
  data: {
    graphset:[
      getCloseConfig(stockState.dates, stockState.closes, '2Y'),
    
    ]
  },
  height: 450, 
  width: 1112
});
var windowClose = [];
  var windowDates = [];
  var cut = 0;
  switch(e.labelid) {
    case '1W': 
      cut = 5;
    break;
    case '1M':
      cut = 20;
    break;
    case '6M': 
      cut = 130;
    break;
    case '1Y': 
      cut = 260;
    break;
    default: 
      cut = stockState.dates.length;
    break;
  }

zingchart.bind('currency', 'label_click', function(e){
  if(stockState.current === e.labelid){
    return;
  }
  
 
    windowClose = stockState.closes.slice(stockState.closes.length-cut);
    windowDates = stockState.dates.slice(stockState.dates.length-cut);
   
  zingchart.exec('currency', 'setdata', {
    
    data: {
      graphset:[
        getCloseConfig(windowDates, windowClose, e.labelid)
     
      ]
    }
  });

  stockState.current = e.labelid;
  
});

</script>
</body>
</html>