<?php
function renderProductCard($product) {
    return "
    <div class='product-card'>
        <img src='{$product['image']}' alt='{$product['name']}'>
        <h3>{$product['name']}</h3>
        <p>{$product['description']}</p>
        <span>{$product['price']}</span>
    </div>
    ";
}
?>