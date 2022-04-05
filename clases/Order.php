<?php
    class Order{
        public function substract($product){
            $stock = $product->getStock();
            $nuevoStock = $stock-1;
            $product->setStock($nuevoStock);   
        }
    }
?>