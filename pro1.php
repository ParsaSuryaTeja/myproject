<?php
$pi=$_POST['pincode'];
?>
<html>
<head>
<script>
var p =<?php echo json_encode($pi);?>;
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
     myArr = JSON.parse(this.responseText);
    var m=myArr[0].Message;

    var n=m.split(":");
   table = document.getElementById("table");

   for( i = 0; i <parseInt(n[1]) ; i++)
           {
               // create a new row
               var newRow = table.insertRow(table.length);
               for(var j = 0; j < 12; j++)
               {
                   // create a new cell
                   var cell = newRow.insertCell(j);

                   // add value to the cell
                   if(j==0)
                   {
                   cell.style.backgroundColor='	#90EE90';
                   cell.innerHTML = myArr[0].PostOffice[i].Name;
                 }
              else if(j==1)
                   cell.innerHTML = myArr[0].PostOffice[i].Description;
                else if(j==2)
                   cell.innerHTML = myArr[0].PostOffice[i].BranchType;
                else  if(j==3)
                   cell.innerHTML = myArr[0].PostOffice[i].DeliveryStatus;
                  else if(j==4)
                   cell.innerHTML = myArr[0].PostOffice[i].Circle;
                  else if(j==5)
                   cell.innerHTML = myArr[0].PostOffice[i].District;
                  else if(j==6)
                   cell.innerHTML = myArr[0].PostOffice[i].Division;
                  else if(j==7)
                   cell.innerHTML = myArr[0].PostOffice[i].Region;
                   else if(j==8)
                   cell.innerHTML = myArr[0].PostOffice[i].Block;
                   else if(j==9)
                   cell.innerHTML = myArr[0].PostOffice[i].State;
                   else if(j==10)
                   cell.innerHTML = myArr[0].PostOffice[i].Country;
                   else
                   cell.innerHTML = myArr[0].PostOffice[i].Pincode;
               }
           }



  }
};
xmlhttp.open("GET", "https://api.postalpincode.in/pincode/"+p, true);
xmlhttp.send();
</script>
</head>
<body>
  <table id="table" border="1">
    <tr>
      <th style="background-color:#90EE90">Name</th>
      <th>Description</th>
      <th> BranchType</th>
      <th>DeliveryStatus</th>
      <th>Circle</th>
      <th>District</th>
      <th>Division</th>
      <th>Region</th>
      <th>Block</th>
      <th>State</th>
      <th>Country</th>
      <th>Pincode</th>
    </tr>
  </table>
   <a href="pro1.html">click here</a> to check another pincode
</body>
</html>
