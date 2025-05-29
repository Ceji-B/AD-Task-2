<?php

require_once __DIR__ . '/vendor/autoload.php';

include_once 'components/header.component.php';
include_once 'utils/Product.utils.php';

$tumblers = [
    [
        "name" => "Eco Chill Tumbler",
        "price" => "₱499",
        "image" => "./assets/img/1.jpg",
        "description" => "Keeps your drinks cool for 24 hours."
    ],
    [
        "name" => "Sleek Matte Tumbler",
        "price" => "₱599",
        "image" => "./assets/img/2.jpg",
        "description" => "Stylish matte finish for everyday use."
    ],
    [
        "name" => "Adventure Flask",
        "price" => "₱699",
        "image" => "./assets/img/3.jpg",
        "description" => "Perfect for outdoor enthusiasts."
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le tumbler</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<main>
    <section class="product-section">
        <h2>Our Featured Tumblers</h2>
        <div class="product-grid">
            <?php
                foreach ($tumblers as $tumbler) {
                    echo renderProductCard($tumbler);
                }
            ?>
        </div>
    </section>
</main>
<?php include_once 'components/footer.component.php'; ?>
</body>
</html>
