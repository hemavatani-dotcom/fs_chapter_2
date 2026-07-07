
<?php
/* DFP40443:Full Stack Web Development 
Activity:My First PHP Script
Name:Hema
*/

$nama="HEMAVATANI";

//This line prints a message to the browser
echo "Hello World!";

#You can also include HTML tags inside echo
echo "<h1>Welcome to PHP Programming </h1>";
echo "<hr><h3>My name is $nama</h3>";
echo "<br><br>";

echo $nama;

echo "<hr><h3>Double Quote vs Single Quote</h3>";

$institusi="Politeknik Kuala Terengganu";

echo "Institusi : $institusi";
echo "<br>";
echo 'Institusi : $institusi';

echo "<hr><h3>Constant</h3>";
//Defining Constant
define("SITE_URL","https://pkt.mypolycc.edu.my");

//Using constant
echo 'Thank you for visiting -' . SITE_URL;
echo "<br>";
echo SITE_URL;

echo"<hr><h3>Constant vs Variable</h3>";
// 1.Defining a Constant(Fixed Value)
define("Tax_Rate", 0.06);  //6% Sales Tax

// 2.Declaring Variables (Can Change)
$itemName = "Laptop";
$price = 2500;

$itemName = "Mouse";
$price = 25;

// 3.Calculation
$totalTax = $price *  Tax_Rate;
$totalPrice =$price + $totalTax;

// 4.Output
echo "Item :" . $itemName . "<br>";
echo "Base Price : RM " . $price . "<br>";
echo "Total with Tax : RM " . $totalPrice;


?>