 function reset() 
       {
          document.getElementById("fName").focus();
       }
       function validate() 
       {

         var phone = document.getElementById("phone").value;
         var result = phone.search(/\d{3}-\d{3}-\d{4}/);

         var card = document.getElementById("cNum");
         result2 = cNum.search(/\d{16}/);
         // Field Entries
         if (document.getElementById("fName").value = "") 
         {
          document.getElementById("fName").value = "Invalid Input";
           document.getElementById("fName").focus();
           return false;
         }
         else if (document.getElementById("lName").value = "") 
         {
          document.getElementById("lName").value = "Invalid Input";
           document.getElementById("lName").focus();
           return false;
         }
         else if (document.getElementById("a1").value = "") 
         {
          document.getElementById("a1").value = "Invalid Input";
           document.getElementById("a1").focus();
           return false;
         }
         else if (document.getElementById("city").value = "") 
         {
          document.getElementById("city").value = "Invalid Input";
           document.getElementById("city").focus();
           return false;
         }
         else if (document.getElementById("state").value = "") 
         {
          document.getElementById("state").value = "Invalid Input";
           document.getElementById("state").focus();
           return false;
         }
         else if (document.getElementById("zip").value = "") 
         {
           document.getElementById("zip").value = "Invalid Input";
           document.getElementById("zip").focus();
           return false;
         }
         else if (document.getElementById("exp").value = "") 
         {
          document.getElementById("exp").value = "Invalid Input";
           document.getElementById("exp").focus();
           return false;
         }
         // Phone Number Validation
         else if (  result != 0)
          {
            document.getElementById("phone").value = "Invalid Input";
            document.getElementById("phone").focus();
            return false;
          }
         // Credit Card Number
         else if (result2 != 0) 
         {
            document.getElementById("cNum").value = "Invalid Input";
            document.getElementById("cNum").focus();
            return false;
         }
         else
          return true;
       }
       function calcTotal() 
       {
         var total = 0.00;
         var food = document.getElementsByName("food"); 
         for (var i = 0; i < food.length; i++) 
         {
            if (food[i].checked)
            {
               total +=  Number(food[i].value);
            }
         }
         document.getElementById("total").innerHTML = "$" + total.toFixed(2);
       }

       document.getElementById("reset").addEventListener("click",reset);
       // document.getElementById("submit").addEventListener("click",validate);
       [... document.querySelectorAll('[name = "food"]')].forEach(function(food)
       {
         food.addEventListener("click", calcTotal);
       })