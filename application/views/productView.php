<?php $this->load->helper("url"); ?>
<?php

echo form_open();
echo '</br></br>';

echo 'Product Code : ';
echo form_input('Id', $product->Id, 'readonly');

?>
<table>
    <tr>
        <th scope="row">Description:</th>
        <td><?php echo $product->Description; ?></td>
    </tr>
</table>
<?Php

echo '</br></br>Category : ';
echo form_input('Category', $product->Category, 'readonly');

echo '</br></br>Artist : ';
echo form_input('Artist', $product->Artist, 'readonly');

echo '</br></br>Product in stock : ';
echo form_input('prodQtyInStock', $product->StockQuantity, 'readonly');

echo '</br></br>Cost : ';
echo form_input('prodBuyCost', $product->BuyCost, 'readonly');

echo '</br></br>Sale Price : ';
echo form_input('prodSalePrice', $product->SalePrice, 'readonly');

echo '</br></br>Discount : ';
echo form_input('priceAlreadyDiscounted', $product->PriceDiscounted, 'readonly');

echo '</br></br>';
echo '<img src=' . base_url() . "assets/images/products/" . 'full/' . $product->Photo . '>';

echo '</br></br>';
echo form_close();
