function makeUrl(url)
{
   url += "?startCity=" + document.getElementById("1").value;
   url += "&startState=" + document.getElementById("2").value;
   url += "&endCity=" + document.getElementById("3").value;
   url += "&endState=" + document.getElementById("4").value;
   return url; 
}

function loadMileage() 
{ 
   var url = makeUrl("http://157.201.194.254/cgi-bin/cs213/mileageAjaxJSON");
   var httpRequest = new XMLHttpRequest(); 
   httpRequest.onreadystatechange = function() 
   {     
      if (this.readyState == 4 && this.status == 200)
      {         
         var obj = JSON.parse(httpRequest.responseText);
         if(obj.trip.miles == "Unknown")
         {
            var text = "Unknown <br>"
            document.getElementById("5").innerHTML += text;
         }
         else
         {
            var trip = "Distance from " + obj.trip.startcity + " , " + obj.trip.startstate +
            " to " + obj.trip.endcity + " , " + obj.trip.endstate + " is " + obj.trip.miles + " ";
            if(obj.trip.tmode)
            {
               trip += "Travel modes: ";
               for( var i = 0; i < obj.trip.tmode.length; i++)
               {
                  if(i != 0)
                     trip += ", ";
                  trip += obj.trip.tmode[i];
               }
            } 
            trip += "<br>";
            document.getElementById("5").innerHTML += trip;
         }
      } 
   };
   httpRequest.open("GET", url, true);
   httpRequest.send();
}
document.getElementById("btn").addEventListener("click",loadMileage);