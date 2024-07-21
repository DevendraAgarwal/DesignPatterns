<?php

use Structural\Composite\CreateProductForm;

require_once '__DIR__/../vendor/autoload.php';

$productForm = new CreateProductForm();

$data = [
    'name' => 'Apple MacBook',
    'description' => 'A decent laptop.',
    'photo' => [
        'caption' => 'Front photo.',
        'image' => 'photo1.png',
    ],
];

$form = $productForm->getProductForm();
$productForm->loadProductData($form, $data);
$productForm->renderProduct($form);
