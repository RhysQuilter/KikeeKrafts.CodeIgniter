<?php $this->load->helper("url"); ?>
<?php

echo form_open_multipart('ProductController/editproduct/' . $product->Id);
echo '</br></br>';

echo 'Product Code : ';
echo form_input('Id', $product->Id, 'readonly');

echo '</br></br>Description : ';
echo form_input('prodDescription', $product->prodDescription);

echo '</br></br>Category : ';
echo form_input('prodCategory', $product->prodCategory);

echo '</br></br>Artist : ';
echo form_input('prodArtist', $product->prodArtist);

echo '</br></br>Product in stock : ';
echo form_input('prodQtyInStock', $product->prodQtyInStock);

echo '</br></br>Cost : ';
echo form_input('prodBuyCost', $product->prodBuyCost);

echo '</br></br>Sale Price : ';
echo form_input('prodSalePrice', $product->prodSalePrice);

echo '</br></br>Discount : ';
echo form_input('priceAlreadyDiscounted', $product->priceAlreadyDiscounted);

echo '</br></br>Select File for Upload :';
echo form_upload('userfile');

echo '</br></br>';
echo form_submit('submitUpdate', "Submit!");
echo form_close();
echo validation_errors();
