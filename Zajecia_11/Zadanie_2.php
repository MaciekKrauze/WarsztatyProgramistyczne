
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 2</title>
    <link rel="stylesheet" href="">
</head>
<body>
<header>

</header>
<main>

</main>
<footer>

</footer>
</body>
<?php
class Product {
    protected $name;
    protected $price;
    protected $quantity;

    /**
     * @param $name
     * @param $price
     * @param $quantity
     */
    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "Produkt: $this->name Price: $this->price Quantity: $this->quantity";
    }

}
    class Cart {
    protected $products;

        public function __construct(array $product)
        {
            $this->products = [];
        }
        public function AddProduct(Product $product) {
            $this->products[] = $product;
        }
        public function RemoveProduct(Product $product) {
            foreach ($this->products as $key => $cartProduct) {
                if ($cartProduct->getName() == $product->getName()) {
                    unset($this->products[$key]);
                    break;
                }
            }
        }
        public function getTotal() {
            $sum = 0;
            for ($i = 0; $i < count($this->products); $i++) {
                $sum += $this->products[$i];
            }
            return $sum;
        }

        public function __toString()
        {
            $output = "Products in cart: \n";
            for ($i = 0; $i < count($this->products); $i++) {
                $output = $output . $this->products[$i] . "\n";
            }
             $output .= "Total price: " . $this->getTotal();
             return $output;
        }
    }
?>