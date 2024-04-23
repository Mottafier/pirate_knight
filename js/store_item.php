<?php 

class Item
{
    public $name;

    public float $price;

    public $quantity;

    private $image;

    public function get_image(){
        return $this->image;
    }
    public function get_quantity(){
        return $this->quantity;
    }
    public function get_price(){
        return $this->price;
    }
    public function get_name(){
        return $this->name;
    }

    public function checkInStock(){
        return ($this->quantity >  0) ? "In Stock" : "Out of Stock!";
    }

    public function __construct(string $_name,  float $_price, int $_quantity, string $_image){
        $this->name = $_name;
        $this->price = $_price;
        $this->quantity = $_quantity;
        $this->image = $_image;
    }

}
//$item1 = new Item("The Pirate Knight Comic", 14.99, 1,"the_pirate_knight.png");
//$item2 = new Item("Pirate Knight Game", 13.99, 3,"PK_color.JPEG");
//$item3 = new Item("Pirate Knight Soundtrack", 15.00, 5,"PK_Logo_Transparent.png");



?>