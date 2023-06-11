<?php 
require("function.php");

$id = $_GET["id_product"];

// var_dump($id); die();

$result=query("SELECT * FROM product WHERE id_product = $id")[0];





?>






<!DOCTYPE html>
<html>
<head>
    <title>Product Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
        }

        .product {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .product img {
            max-width: 200px;
            margin-right: 20px;
        }

        .product-info {
            flex-grow: 1;
        }

        .product-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-description {
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .buy-button {
            display: block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #ffffff;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            border-radius: 4px;
        }

        .buy-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Product Page</h1>
        <div class="product">
            <img src="image/<?= $result["gambar"]; ?>" alt="Product Image">
            <div class="product-info">
                <div class="product-title"><?= $result["nama_product"]; ?></div>
                <div class="product-description">
                    <?= $result["deskripsi"]; ?>
                </div>
                <div class="product-price"><?= $result["harga"]; ?></div>
                <a href="#" class="buy-button">Buy Now</a>
            </div>
        </div>
    </div>
</body>
</html>
