<html>
<head>
    <title>Food Truck</title>
    <link rel="stylesheet" href="css.css">
</head>
<body class="content">

<?php
// P3_r1.php

/*
    if data is submitted, show it
    if no data is submitted, show the form
*/

$myItem = new Item(1, 'Taco', 'Our Tacos are awesome!', 4.95);
$myItem->addExtra('Hot Sauce');
$myItem->addExtra('Cheese');
$myItem->addExtra('Guacomole');
$myItem->addExtra('Salsa');

// our to go back of food items
$items[] = $myItem;
$myItem = new Item(2, 'Hot Dog', 'Our Hot Dogs are awesomer!', 5.95);
$myItem->addExtra('Ketchup');
$myItem->addExtra('Onions');
$myItem->addExtra('Spicy Mustard');
$myItem->addExtra('Saurkraut');

$items[] = $myItem;
$myItem = new Item(3, 'Sundae', 'Our Sundae are awesomest!',3.95);
$myItem->addExtra('Chocolate');
$myItem->addExtra('Nuts');
$myItem->addExtra('Whipped Cream');
$myItem->addExtra('Cherry');

$items[] = $myItem;
#initializing variables used
$Total = 0; // total
$subtotal = 0; //subtotal
$TaxRate = 0.09; // tax rate

if(isset($_POST["amount"])) { //  if data is submitted, show it
    echo "<h1><b>Food Truck Order</b></h1>";      
    // save form value in an array
    $amount = $_POST["amount"];
    echo '<pre>'; 
    $i = 0; // set array value counter
    foreach($items as $item)
    {
        $subtotal = round($amount[$i]*$item->Price,2); //calculate the price per item
        echo "<p>Item: $item->Name    Price: $$item->Price Ordered Amount: $amount[$i]    sub-total: $$subtotal</p>"; // display item, price, order amount, and total price
        $i++; //increase array counter
        $Total += round($subtotal,2); // add item total to order total
    }
    echo "<p>The total before tax is: $$Total</p>"; // show total before tax
    $Tax = round($TaxRate * $Total,2); // show tax amount
    echo "<p>The tax for your order is: $$Tax</p>"; // show total after tax
    $Total = round($Tax + $Total, 2); // calculate total
    echo "<p class=\"total\"><b>The Total for your order is: $$Total </b></p><br />"; //show total
    echo '</pre>';     
} else{ //show the form
    echo "<div>";
    echo "<h1 class = \"foodtruck\"><b>Food Truck Menu</b></h1>";
    echo '<form action="" method="post">';
    foreach($items as $item)
    {
        echo "
            <p>Item: $item->Name    Price: $item->Price  Order Amount: <input type='number' min=0 step=1 name='amount[]' value=0 /> </p><br />
            ";
    }
    echo "<input class=\"hover\" type=\"submit\" /> <br />
        </form>
    ";
    
    echo "<img src=\"images/taco.jpg\" alt=\"Taco image\">";
    echo "<img src=\"images/hotdog.jpg\" alt=\"Hot dog image\">";
    echo "<img src=\"images/sundae.jpg\" alt=\"Sundae image\">";
    echo "</div>";
}

class Item{
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    public $Extras = array();
    
    public function __construct($ID,$Name,$Description,$Price){
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = $Price;       
    }// end constructor
    
    public function addExtra($extra){
        $this->Extras[] = $extra;

        
    }//end addExtra()
} // end Item class

?>

</body>
</html>
