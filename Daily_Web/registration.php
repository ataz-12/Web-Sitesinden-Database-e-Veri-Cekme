<!doctype html>
<html>
<head>
       <meta charset="utf-8"><link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
 <script src='//code.jquery.com/jquery-2.1.4.min.js'></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
        <script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];</script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Kullanıcı Ekle</title>
    
    <style>
        .kutu {
            margin-top: 40px
        }
    </style>
    <?php
  session_start();
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
  }
?>
        <?php   
            include("baglanti.php");
                if ($_POST)
                {
                $username = $_POST["username"]; 
                $userpassword = $_POST["userpassword"]; 
                  $tc = $_POST["tc"]; 
                }
                if ($_POST) 
                {
                $tsql = "insert into User_Login (username, userpassword,tc) values ('$username','$userpassword','$tc')";   
                $params = array(1, "some data");
                $stmt = sqlsrv_query( $conn, $tsql, $params);
                if( $stmt === false )
                {
                 die( print_r( sqlsrv_errors(), true));
                } header("Location: index.php");
                }
        ?>
</head>
<body>
<script>
function dogrula() {
    var x = document.forms["form1"]["username"].value;
    if (x == null || x == ""|| x.length < 4) {
        alert("Kullanıcı Adını Girmediniz!");
        return false;
    }
     var y = document.forms["form1"]["userpassword"].value;
    if (y == null || y == ""|| y.length < 4) {
        alert("Şifre Girmediniz!");
        return false;
    }
}
</script>
<form id="form1" onsubmit="return dogrula()" method="post">
    <div class="row align-content-center justify-content-center ">
        <div class="col-md-3 kutu">
            <h3 class="text-center">Yeni Kullanıcı Ekle</h3>
            <table class="table">
                <tr>
                    <td>
                        <input type="text" ID="username" name="username" class="form-control" placeholder="Kullanıcı adı" value='<?php echo @$username ?>'/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" ID="userpassword" name="userpassword" class="form-control" placeholder="Parola"/>
                    </td>
                </tr>
  <tr>
                    <td>
                        <input type="text" ID="tc" name="tc" class="form-control" placeholder="TC"/>
                    </td>
                </tr>


                <tr>
                    <td class="text-center">
                        <input type="submit" class="btn btn-primary btn-block" ID="btnGiris" value="Kaydet"/>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</form>
</body>
</html>