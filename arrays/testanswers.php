<style type="text/css">
	.orders{
		width:100%; 
	       }
               
	/*  Define the background color for all the ODD background rows  */
	.orders tr:nth-child(odd){ 
		background: #b8d1f3;
	}
        
	/*  Define the background color for all the EVEN background rows  */
	.orders tr:nth-child(even){
		background: #dae5f4;
	}
</style>

<?php

//Q1
$arrayinteger = str_split($integer);
function hasduplicates()
{
 foreach ($arrayinteger as $integer) 
 {
   if(($key = array_search($integer, $arrayinteger)) !== false)
                    {
                echo 'array has got duplicates';
                    }  
 }
}
  
 //----------------------------------------------------------------*******************------------------------------//


//Q2 answer


    $arr1 = str_split($s1);
    $arr2 = str_split($s2);
    
   foreach ($arr1 as $str1)
   {
      
             if(($key = array_search($str1, $arr2)) !== false)
                    {
                unset($arr2[$key]);
                    }
        
      $s2 = implode($arr2);
   }
   

 
 
 //----------------------------------------------------------------*******************------------------------------//

// Q3 answer --------->>  instead of making an array function, I will use the inbuilt function array_reverse()

 //----------------------------------------------------------------*******************------------------------------//
//Q4 answer 

class phone
{
   var $phoneno;
   var $address;
   function details($phoneno, $address)
   {
     $this->phoneno = $_phoneno;
     $this->address = $_address;
   }
  
}
class cellphone extends phone
{
   var $cellularcompany;
   function cellphone($phoneno, $address, $cellularcompany) {
       details::details($phoneno, $address);
       $this->cellularcompany = $_cellularcompany;
   }
  
}
class cordless extends phone
{
   var $range;
   function cellphone($phoneno, $address, $range) {
       details::details($phoneno, $address);
       $this->range = $_range;
   }
  
}
//----------------------------------------------------------------*******************------------------------------//
// Q5 answer

$query5 = "select DISTINCT(order_id ) as OrderId, sum(shipping_amount, Price) as OrderTotal from orderitems, orders 
           where OrderItems.order_id= Orders.id AND orders.date < 2003-6-1 GROUP BY order_id ORDER BY date DESC ";

//----------------------------------------------------------------*******************------------------------------//


//Q6 answer

 
  echo'<table class="orders"><tr> <th>Order Id</th> <th>Order Total</th> </tr>';
 
  foreach ($orders as $k => $v)  { ?>

  <tr> <td><?php echo $k ; ?></td> <td><?php echo $v ; ?></td> </tr>

  <?php }     
   
  echo' </table>';

//----------------------------------------------------------------*******************------------------------------//


//Q8 answer
$query8 = "Select COUNT(orders.id), DISTINCT(customers.state)  from Orders, Customers where Orders.customer_id= Customers.id GROUP BY customers.state";


?>

    
        
       