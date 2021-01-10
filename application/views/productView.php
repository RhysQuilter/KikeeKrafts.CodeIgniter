<?php
defined('BASEPATH') or exit('No direct script access allowed');

echo form_open();
echo '</br></br>';

echo 'Product Code : ';
echo form_input('Id', $product->Id, 'readonly');

echo '</br></br>Description : ';
echo form_input('prodDescription', $product->prodDescription, 'readonly');

echo '</br></br>Category : ';
echo form_input('prodCategory', $product->prodCategory, 'readonly');

echo '</br></br>Artist : ';
echo form_input('prodArtist', $product->prodArtist, 'readonly');

echo '</br></br>Product in stock : ';
echo form_input('prodQtyInStock', $product->prodQtyInStock, 'readonly');

echo '</br></br>Cost : ';
echo form_input('prodBuyCost', $product->prodBuyCost, 'readonly');

echo '</br></br>Sale Price : ';
echo form_input('prodSalePrice', $product->prodSalePrice, 'readonly');

echo '</br></br>Discount : ';
echo form_input('priceAlreadyDiscounted', $product->priceAlreadyDiscounted, 'readonly');

echo '</br></br>';
echo '<img src=' . $img_base . 'full/' . $product->prodPhoto . '>';

echo '</br></br>';
echo form_close();