<!DOCTYPE html>

<html lang = "en">
<head>
    <meta charset = "utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Mortgage Calculator </title>
    <link rel="stylesheet" type="text/css" href="Mortgage.css">
    <script src="mortgage.js"></script>
</head>
<body>
   <h1 style=" text-align: center; text-shadow: 0 0 3px #FFFFFF, 0 0 5px #1E90FF"> Mortgage Calculator</h1>
   <div style="box-shadow: -5px -5px #FFFFFF">
      <div style="text-align: left; border: none; margin-left: 20%;">
         <?php print "APR: " . $_POST["apr"]; ?>
         <br>
         <?php print "Term: " . $_POST["term"]; ?>
         <br>
         <?php print "Amount: " . $_POST["amount"]; ?>
         <br>
         <?php
         $apr = $_POST["apr"];
         $term = $_POST["term"];
         $amount = $_POST["amount"];

         $interest = $apr / 100 / 12;
         $payments = $term * 12;
         $x = pow(1 + $interest, $payments); //Math.pow computes powers
         $monthly = ($amount * $x * $interest) / ($x - 1);

         printf("Payments: %.2f",$monthly); 
         ?>
      </div>
   </div>

</body>
</html>