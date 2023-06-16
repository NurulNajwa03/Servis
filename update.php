<?php 
//sambungan ke pangkalan data
include "config.php";
//sambung fail header
include "header.php";
//mulakan sesi login untuk kekalkan login
?>
<html>
  <head>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css"rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">

    <title>Servis laptop</title>
  </head>

  <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
          Name: <input type="text" name="name">
          <!-- <span class="error">* <?php echo $nameErr;?></span> -->
          <br><br>
          E-mail: <input type="text" name="email">
          <!-- <span class="error">* <?php echo $emailErr;?></span> -->
          <br><br>
          No Hp: <input type="text" name="email">
          <!-- <span class="error">* <?php echo $emailErr;?></span> -->
          <br><br>
          <button>Update</button> 
          <button>Delete</button>
  </body>
</html>