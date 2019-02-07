<?php
//items.php

$myItem = new Item(1,"Pizza","Our Pizzas are awesome!",10.95);
$myItem->addExtra("Cheese");
$myItem->addExtra("Chichen");
$myItem->addExtra("Pineapple");
$myItem->addExtra("Olive");
$myItem->addExtra("WhiteSauce");
$config->items[] = $myItem;

$myItem = new Item(2,"Steak","Our Steaks are awesome!",16.95);
$myItem->addExtra("MashedPotatoes");
$myItem->addExtra("GarlicCloves");
$myItem->addExtra("SteakSauce");
$config->items[] = $myItem;

$myItem = new Item(3,"FruitCake","Our FruitCakes are awesome!",4.95);
$myItem->addExtra("Cherries");
$myItem->addExtra("Pineapple");
$myItem->addExtra("Lemon peel");
$myItem->addExtra("Orange Peel");
$config->items[] = $myItem;


//create a counter to load the ids...
//$myItem = new Item(1,"Pizza","Our Pizzas are awesome!",10.95);
//$myItem = new Item(2,"Steak","Our Steaks are awesome!",16.95);
//$myItem = new Item(3,"FruitCake","Our FruitCakes are awesome!",4.95);

/*
echo '<pre>';
var_dump($items);
echo '</pre>';
die;
*/


class Item
{
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    public $Extras = array();
    
    public function __construct($ID,$Name,$Description,$Price)
    {
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = $Price;
        
    }#end Item constructor
    
    public function addExtra($extra)
    {
        $this->Extras[] = $extra;
        
    }#end addExtra()

}#end Item class
