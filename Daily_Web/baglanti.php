<?php  
$serverName ="DESKTOP-NONT79G";

$connectionInfo=array("Database"=>"Test","UID"=>"ahmetakyuz","PWD"=>"12345");
$conn= sqlsrv_connect($serverName,$connectionInfo);

if( $conn ) {
    # echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));

}

?>