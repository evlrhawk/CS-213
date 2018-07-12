<!DOCTYPE html>

<html lang = "en">
<head>
    <meta charset = "utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="week5.css">
    <title> Order Confirmation </title>
    <!-- <script src="assign10.js"></script> -->
</head>
<body>

   <div class="div" style="border-style: solid; border-radius: 25px;
    min-width: 380px; margin-left: 25%; margin-right: 25%;">
      <h1 style="text-align: center;">
            Order Review   
      </h1>
      <div class="format2">
         <div>
           Name: 
           <br>
           <?php 
               echo $_GET["fName"] . " " . $_GET["lName"];
           ?>
           <br>
           <br>

           Address:
           <br> 
           <?php
               echo nl2br( $_GET["a1"] . "\n" . $_GET["city"] . ", " . $_GET["state"] . $_GET["zip"]); 
           ?>
           <br>
           <br>

           Phone:
           <br>
           <?php
               echo $_GET["phone"];
           ?>
           <br>
           <br>

           Card Type:
           <br>
           <?php
               echo $_GET["type"]
           ?>
           <br>
           <br>

           Card Exp:
           <br>
           <?php
               $exp = $_GET["exp"];
               function displayMonth($exp)
               {
                  if ($exp{0} == "0" && $exp{1} == "1")
                  {
                     echo "January 20" . $exp{3} . $exp{4};
                  }
                  else if ($exp{0} == "0" && $exp{1} == "2")
                  {
                     echo "February 20" . $exp{3} . $exp{4};
                  }
                  else if ($exp{0} == "0" && $exp{1} == "3")
                  {
                     echo "March 20" . $exp{3} . $exp{4};
                  }
                  else if ($exp{0} == "0" && $exp{1} == "4")
                  {
                     echo "April 20" . $exp{3} . $exp{4};
                  }
                  else if ($exp{0} == "0" && $exp{1} == "5")
                  {
                     echo "May 20" . $exp{3} . $exp{4};
                  }
                  else if ($exp{0} == "0" && $exp{1} == "6")
                  {
                     echo "June 20" . $exp{3} . $exp{4};
                  }
                  else if ($exp{0} == "0" && $exp{1} == "7")
                  {
                     echo "July 20" . $exp{3} . $exp{4};
                  }
                  else if ($exp{0} == "0" && $exp{1} == "8")
                  {
                     echo "August 20" . $exp{3} . $exp{4};
                  }
                  else if ($exp{0} == "0" && $exp{1} == "9")
                  {
                     echo "Septempber 20" . $exp{3} . $exp{4};
                  }
                  else if ($exp{0} == "1" && $exp{1} == "0")
                  {
                     echo "October 20" . $exp{3} . $exp{4};
                  }
                  else if ($exp{0} == "1" && $exp{1} == "1")
                  {
                     echo "November 20" . $exp{3} . $exp{4};
                  }
                  else if ($exp{0} == "1" && $exp{1} == "2")
                  {
                     echo "December 20" . $exp{3} . $exp{4};
                  }
               }
               displayMonth($exp);
           ?>

           <br>
           <br>
         </div>
         <div>
            Order:
            <br>
            <?php
            for ($i = 0; $i < $_GET["food"].length; $i++) 
            { 
               if ($_GET["food"] == "3.50")
               {
                  print "Hamburger: " . $_GET["food"] . "<br>";
               }
               else if ($_GET["food"] == "4.50")
               {
                  print "Cheeseburger: " . $_GET["food"] . "<br>";
               }
               else if ($_GET["food"] == "6.00")
               {
                  print "Bacon Cheeseburger: " . $_GET["food"] . "<br>";
               }
               else if ($_GET["food"] == "2.00")
               {
                  print "Fries: " . $_GET["food"] . "<br>";
               }
               else if ($_GET["food"] == "4.00")
               {
                  print "Bacon Cheese Fries: " . $_GET["food"] . "<br>";
               }
            }
            ?>

            <br>
            <br>
            Total:
            <br>
            <?php
                echo "$" . $_GET["total"];
            ?>

            <form action="assign10_a.php">
              <input type="submit" name="confirmation" value="Confirm Order">
              <input type="submit" name="cancel" value="Cancel Order">
            </form>
         </div>
      </div>
   </div>

</body>
</html>