function Calculate(){
    var Option = document.getElementById('option').selectedOptions[0].value;

    var Amount = document.getElementById("amount").value;
    var xhttp = new XMLHttpRequest();
           xhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("erroramount").innerHTML =this.responseText;
               }
               else
               {
                   document.getElementById("erroramount").innerHTML = this.status;
               }
              
             
             };
             xhttp.open("POST", "../Controller/CheckAmount.php", true);
             xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
             xhttp.send("Amount="+Amount + "&Option="+Option);
            }