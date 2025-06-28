<?php
//database conection  file
include('dbconnection.php');
//Code to confirm login credentials

if(isset($_POST['sub'])){
    $u=$_POST['adminid'];
    $p=$_POST['pass'];
    $s= "select * from admin where adminid='$u' and password= '$p'";   
   $qu= mysqli_query($con, $s);
   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['id']=$f['id'];
      header ('location:home.php');
   }
   else{
       echo 'admin id or password does not exist';
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>UFC | EMRS</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="images/UFCLOGO.JPG" type="image/png">

<style>
body {

    background-image: url('images/medik.JPEG');
  /* background-repeat: no-repeat; */
}
</style>
</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <br><br><br>
       <h6 align="center"><b>Unification FC | Electronic Medical Record System (EMRS)</b></h6>
    <div align ="center"> <img src="images/UFCLOGO.JPG" height="80" width="100" alt="Logo">
            
    <div align="center" style="color: navy"> <h4> ADMIN LOGIN </h4> </div>
    <body>
        <hr>
        <form method="POST" enctype="multipart/form-data">
            <table>
                
                <tr>
                    <td style="color: black">
                        Admin id
                        <input type="text" name="adminid" required="required">
                    </td>
                </tr>
                <tr>
                    <td style="color: black">
                        Password
                        <input type="password" name="pass" required="required">
                    </td>
                </tr>
             
                 <tr>
                    <td>
                         <div align="center"> <br>
                        <input type="submit" name="sub" value="submit">
                        <input type="reset" name="reset" value="reset">
                   </div> 
                </td>
                </tr>

            </table>
            <hr>
<div align="center"><a href="https://instagram.com/alliancepath1960"> © 2019 - 2025 All right reserved Unification FC  | Design by Alliance Path </a>  </div>
    </div>
</div>   
</body>
</html>