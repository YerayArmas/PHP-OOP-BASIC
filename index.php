<?php

// Iteration I
// Create Product class
class Laptop
{
    public $name;
    public $price;
    public $description;
    public function __construct($name, $price, $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getDescription()
    {
        return $this->description;
    }
}

$prod1 = new Laptop("MSi", 1350.25, "Any given description");
$prod2 = new Laptop("LG", 1100, "Otra descpt.");
$prod3 = new Laptop("HP", 1100, "Otra descpt.");
$item = [$prod1, $prod2, $prod3];

print_r($item) . "\n";

echo "\n";
echo $prod2->getName();
echo "\n";
echo $prod1->getPrice();
echo "\n";
echo $prod3->getDescription();
echo "\n \n";


// Iteration II -> Only trying, missing array
class ShoppingCart
{
    public $productName;
    public $productPrice;
    public $productDescription;

    public function __construct($productName, $productPrice, $productDescription)
    {
        $this->productName = $productName;
        $this->productPrice = $productPrice;
        $this->productDescription = $productDescription;
    }
    public function getProduct()
    {
        return $this->productName . " -> " . $this->productPrice . "€/kgr" . " - " . $this->productDescription;
    }
    public function getName()
    {
        return $this->productName;
    }
    public function getPrice()
    {
        return $this->productPrice;
    }
    public function getDescription()
    {
        return $this->productDescription;
    }
}

$apple = new ShoppingCart("Apple", 1.5, "Information about Apples");
$pear = new ShoppingCart("Pear", 1.3, "Information about pears");
$lemon = new ShoppingCart("Lemon", 1.7, "Information about lemons");
$watermelon = new ShoppingCart("Watermelon", 2.2, "Information about watermelon");
$avocado = new ShoppingCart("Aguacate", 4.2, "Information about avocado");

echo $lemon->getProduct();


// Iteration II
class ShoppingKart
{
    public $items;
    public $price; // $price is added afterwords to continue with the iteration
    public function __construct()
    {
        $this->items = array();
    }
    public function addItem($product, $price)
    {
        foreach ($this->items as &$item) {
            if ($item['product'] === $product) {
                $item['quantity'] += 1; // Also added this afterwords, so we implement the counting of products/items
                return;
            }
        }
        $this->items[] = array('product' => $product, 'price' => $price, 'quantity' => 1); // product + values
    }
    public function removeItem($product)
    {
        foreach ($this->items as $key => $item) { // Here came all my effort and extra help
            if ($item['product'] === $product) {
                unset($this->items[$key]);
                return;
            }
        }
    }
    public function getItems()
    {
        return $this->items; // We get all the items
    }
    public function getTotal()
    {
        $total = 0;
        foreach ($this->items as $item) { // We get the total prices of all the items
            $total += $item['price'];
        }
        return $total . ' $';
    }
    public function sortItems()
    {
        return sort($this->items); // Easy way to sort it out alphabetically, 
    }
    public function searchItems($product)
    {
        $foundItems = array();
        foreach ($this->items as $key => $item) {
            if ($item['product'] === $product) {
                $foundItems[$key] = $item;
            }
        }
        return $foundItems;
    }
}

echo "Adding new Items to the 'Kart' \n \n";
$kart = new ShoppingKart();
$kart->addItem("Bike", 315);
$kart->addItem("Chocolate", 2);
$kart->addItem("Chocolate", 2);
$kart->addItem("Cookies!", 2);
$kart->addItem("Much more Chocolate!!", 2.5);
$kart->addItem("Cream", 1.3);

$kart->sortItems(); // Use function sortItems to get them in alphabetic order

print_r($kart->getItems()) . "\n \n";
echo "Total price is: " . $kart->getTotal() . "\n \n";


// BONUS Piece of work
$toBeSearch = "Chocolate"; // Change here the item to be searched
$searchResult = $kart->searchItems($toBeSearch);
if (!empty($searchResult)) {
    echo "Search result for product " . $toBeSearch . ": \n \n";
    foreach ($searchResult as $key => $item) {
        echo "Key: $key, Product: {$item['product']}, Price: {$item['price']}, Quantity: {$item['quantity']}\n \n";
    }
} else {
    echo "No items found for product"  . $toBeSearch . "\n";
}
