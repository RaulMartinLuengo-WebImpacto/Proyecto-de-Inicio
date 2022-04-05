<?php
    include 'clases/Order.php';
    include 'clases/Product.php';
    
    //Realizo cambio en el método substract
    $product = new Product("pantalon",100);
    $nuevoOrder = new Order();
    $nuevoOrder->substract($product);
    $stock = $product->getStock();
    echo 'El stock es '.$stock;
  
?>