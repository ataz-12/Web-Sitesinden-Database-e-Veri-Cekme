<!DOCTYPE html>
<html lang="en">
<head>
  <title>Currency BoJJ Chart</title>
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

				$sql = "SELECT *  FROM [Test].[dbo].[Daily] WHERE rate >0 ";
				$data= sqlsrv_query( $conn,$sql); 
		?>

 <?php 
        include("menü.php"); 
    ?>
<div class="container">
 <iframe src="guncelkur/currency_rate_1.html" width="100%" height="220" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
  
		 <div id="currency"></div>
     <button id="export" name="export" class="btn btn-info">Image</button>
   <a download="filename.png" href="/Daily/a" >
    <button type="button" class="btn btn-success">Save </button><img  src="/Daily/a"   id="image"></a>
   
<script type="text/javascript">
document.getElementById('export').addEventListener('click', function() {
   zingchart.exec('currency', 'getimagedata', {
       filetype : 'png',
       callback : function(imagedata) {
           console.log(imagedata);
           document.getElementById('image').src = imagedata;
       }
   });  
});

</script> 
		<div><script type="text/javascript" src="http://finanswebde.com/fwebdev2/js/fwidget.js"></script><div id="fwebdeconverter" style="width:500px;"><a title="Döviz ve Altın Çevirici Eklentisi" style="font-size:10;text-decoration:none;color:black" href="//finanswebde.com/"></a></div><script type="text/javascript">_fcepte.createConverter("currency",1112,205);
  </script></div>
	  </div>
		<?php
		$data= sqlsrv_query( $conn,$sql);
		?>
										
	<script >
	var DataCurrency=[
		<?php 
			while($info=sqlsrv_fetch_array($data))
				echo $info[1].',';
		?>];
		<?php
 			$data= sqlsrv_query( $conn,$sql);
		?>
	var LabelsCurrency=[
		<?php 
			while($info=sqlsrv_fetch_array($data))
				 echo '"'. $info[0]->format('d/m/Y').'",'; 
		?>];

		<?php
 			 $data= sqlsrv_query( $conn,$sql);
		?>
	var DataRate=[
		<?php 
			while($info=sqlsrv_fetch_array($data))
				echo $info[2].',';
		?>];
	</script>
		<?php
			 sqlsrv_close($conn);
		?>

<script type="text/javascript">
var stockState = {
  current: '2Y',
  dates: LabelsCurrency,
  closes: DataCurrency,
  volumes: DataRate
};

function getCloseConfig(dates, values, current) {
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
    text: "Currency Chart(usd/jpy)",
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
    values: "70:140:10",
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
			values: values,
			lineColor: "#fff",
			lineWidth: 1,
			backgroundColor:"#909090 #313131"
		}
	],
	labels: [
	  {
	    x: 490,
	    y: 10,
	    id: '1W',
	    fontColor: (current === '1W') ? "#FFF" : "#777",
	    fontSize: "16",
	    fontFamily: "Open Sans",
	    cursor: "hand",
	    text: "1W"
	  },
	  {
	    x: 530,
	    y: 10,
	    id: '1M',
	    fontColor: (current === '1M') ? "#FFF" : "#777",
	    fontSize: "16",
	    fontFamily: "Open Sans",
	    cursor: "hand",
	    text: "1M"
	  },
	  {
	    x: 570,
	    y: 10,
	    id: '6M',
	    fontColor: (current === '6M') ? "#FFF" : "#777",
	    fontSize: "16",
	    fontFamily: "Open Sans",
	    cursor: "hand",
	    text: "6M"
	  },
	  {
	    x: 610,
	    y: 10,
	    id: '1Y',
	    fontColor: (current === '1Y') ? "#FFF" : "#777",
	    fontSize: "16",
	    fontFamily: "Open Sans",
	    cursor: "hand",
	    text: "1Y"
	  },
	  {
	    x: 650,
	    y: 10,
	    id: '2Y',
	    fontColor: (current === '2Y') ? "#FFF" : "#777",
	    fontSize: "16",
	    fontFamily: "Open Sans",
	    cursor: "hand",
	    text: "Full"
	  }
	]
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
  id: 'currency',
  data: {
    graphset:[
      getCloseConfig(stockState.dates, stockState.closes, '2Y'),
      getVolumeConfig(stockState.dates, stockState.volumes)
    ]
  },
  height: 450, 
	width: 1112
});


zingchart.bind('currency', 'label_click', function(e){
  if(stockState.current === e.labelid){
    return;
  }
  
  var windowClose = [];
  var windowVolume = [];
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
    windowClose = stockState.closes.slice(stockState.closes.length-cut);
    windowDates = stockState.dates.slice(stockState.dates.length-cut);
    windowVolume = stockState.volumes.slice(stockState.volumes.length-cut);
    
  zingchart.exec('currency', 'setdata', {
    
    data: {
      graphset:[
        getCloseConfig(windowDates, windowClose, e.labelid),
        getVolumeConfig(windowDates, windowVolume)
      ]
    }
  });

  stockState.current = e.labelid;
  
});

</script>
</body>
</html>