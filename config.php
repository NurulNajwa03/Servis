<?php 
$host="localhost"; 
$user="root"; 
//biarkan kosong password jika gubna xampp 
$password =""; 
//nama pangkalan data 
$database="servis"; 
$samb= mysqli_connect($host, $user, $password, $database); 
if(mysqli_connect_errno()){ 
    echo "Proses sambung ke pangkalan data gagal"; 
    exit(); 
} 
?>