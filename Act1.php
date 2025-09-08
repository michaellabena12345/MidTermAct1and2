<?php

echo "---------------- TASK 1: Basic Product List (Index Array) ----------------<br><br>";


$productNames = [
    "iPhone",
    "Samsung", 
    "Vivo",
    "Cherry Mobile"
];

$productPrices = [55000, 40000, 20000, 8000];

echo implode(", ", $productNames) . "<br><br>";

echo "First product Price: " . $productPrices[0] . "<br><br>";
echo "Last product Price: " . $productPrices[count($productPrices)-1] . "<br><br>";

echo "---------------- TASK 2: Detailed Product View (Associative Array) ----------------<br><br>";

$selectedProduct = [
    "name" => $productNames[0],  
    "price" => $productPrices[0], 
    "brand" => "Apple",
    "inStock" => true,
    "description" => "iPhones are known for high-quality cameras."
];


echo "Selected Product Details:<br><br>";
echo "Name: " . $selectedProduct["name"] . "<br><br>";
echo "Price: " . $selectedProduct["price"] . "<br><br>";
echo "Brand: " . $selectedProduct["brand"] . "<br><br>";

echo "In Stock: " . ($selectedProduct["inStock"] ? "Yes" : "No") . "<br><br>";
echo "Description: " . $selectedProduct["description"] . "<br><br>";

$selectedProduct["warranty"] = "2 years";
echo "Warranty: " . $selectedProduct["warranty"] . "<br><br>";

echo "---------------- TASK 3: Full Catalog (Multidimensional Array) ----------------<br><br>";

$productNamesArr = [
    [
        "id" => 1,
        "name" => "iPhone",
        "price" => 55000,
        "inStock" => true,

    ],
    [
        "id" => 2,
        "name" => "Samsung",
        "price" => 40000,
        "inStock" => false,
    ],
    [
        "id" => 3,
        "name" => "Vivo",
        "price" => 20000,
        "inStock" => true,
    ],
    [
        "id" => 4,
        "name" => "Cherry Mobile",
        "price" => 8000,
        "inStock" => true,
    ]
];


foreach ($productNamesArr as $prod) {
     echo "Product: " . $prod["name"] . " - Price: " . $prod["price"]. "<br><br>";
}

?>