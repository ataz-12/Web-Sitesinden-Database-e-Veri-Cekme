<!--Login.php-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8"><link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
 <script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
        <script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];</script>  <script src='//code.jquery.com/jquery-2.1.4.min.js'></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Login Ekranı</title>
    <style>
        .kutu {
            margin-top: 20px
            
        }
    </style>
</head>

<body>
  <?php
       include("baglanti.php"); 
      


      if (isset($_POST['username'])){
        $userid = $_POST['userid'];
        $username = $_POST['username'];
        $userpassword = $_POST['userpassword'];
           $userid = stripslashes($userid);
        $username = stripslashes($username);
        $userpassword = stripslashes($userpassword);
       
        $query = "SELECT * FROM [dbo].[User_Login] WHERE username='{$username}' and userpassword= '{$userpassword}' ";
        $result = sqlsrv_query($conn, $query) or die( print_r( sqlsrv_errors(), true)) ;
        $rows = 0;
        while($row = sqlsrv_fetch_array($result)){
          $rows++;
        }
        if($rows==1){
            session_start();
          $_SESSION['username'] = $username;
             $_SESSION['userid'] = $userid;
                $_SESSION['userpassword'] = $userpassword;
          header("Location: index.php");
        }else{
          echo "<div class='form'> <h3>Kullanıcı Adı yada Parola Yanlış</h3> <br/> <a href='login.php'>Login</a> </div>";
        }
      }else{
    ?>
    <div class="form">
     <form id="form1" method="post" onsubmit="return dogrula() " action="login.php">
    <div class="row align-content-center justify-content-center ">
        <div class="col-md-3 kutu">
            <h3 class="text-center">Giriş Ekranı</h3>
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
                    <td class="text-center">
                        <input type="submit" class="btn btn-primary btn-block" ID="btnGiris" value="Giriş" name="submit"/>
                    </td>
                </tr>
              <!--  <tr>
                    <td>
                  <a href="üye_ekle.php">   <button type="button" class="btn btn-primary">Yeni Kayıt</button></a>
              </td>
                </tr> -->
            </table>
        </div>
    </div>
</form>
     
    </div>
    
    <?php
      }
    ?>
  </body>
  <script>
function dogrula() {
    var x = document.forms["login"]["username"].value;
    if (x == null || x == ""|| x.length < 4) {
        alert("Kullanıcı Adını Girmediniz!");
        return false;
    }
     var y = document.forms["login"]["userpassword"].value;
    if (y == null || y == ""|| y.length < 4) {
        alert("Şifre Girmediniz!");
        return false;
    }
}
</script>
</html>