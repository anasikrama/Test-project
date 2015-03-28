<?php
$language = array("q"=>array(2=>"queensland","x"=>"abc","b"=>"xyz"),"a"=>array("amersterdam",pqr,ghj),"v"=>array("verginia",dfg,gyuyui),"c"=>array("cleveland",ohio,dert));
foreach ($language as $key=>$value)
    
{
        echo $key,'---------------';
        echo "<br/>" ;
 
         foreach ($value as $key=>$details)
        {
            echo $key,'---------------',$details ;
             echo "<br/>" ;
        }
    
    
}
printf("\$language is an array: %s <br />", (is_array($language) ? "TRUE" : "FALSE"));
printf("\$amersterdam is an array: %s <br />", (is_array($amersterdam) ? "TRUE" : "FALSE"));
?>


<!DOCTYPE html>
<html>
<head>
<script>
function loadXMLDoc()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","ajax_info.txt",true);
xmlhttp.send();
}
</script>
</head>
<body>

<div id="myDiv"><h2>Let AJAX change this text</h2></div>
<button type="button" onclick="loadXMLDoc()">Change Content</button>
</body>
</html>
