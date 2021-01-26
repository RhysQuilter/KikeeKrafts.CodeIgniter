<?php $this->load->helper("url"); ?>
<?php

echo form_open();
echo '</br></br>';

echo 'Product Code : ';
echo form_input('Id', $order->Id, 'readonly');

?>
<table>
    <tr>
        <th scope="row">Description:</th>
        <td><?php echo $order->Description; ?></td>
    </tr>
    <tr>
        <th colspan="2" scope="row">Items:</th>
    </tr>
    <tr>
        <td colspan="2">
            <table>
                <tr>
                    <th align="left" width="100">Id</th>
                    <th align="left" width="100">Description</th>
                    <th align="left" width="100">Category</th>
                    <th align="left" width="100">Artist</th>
                    <th align="left" width="100">QtyInStock</th>
                    <th align="left" width="100">BuyCost</th>
                    <th align="left" width="100">SalePrice</th>
                    <th align="left" width="100">Price Discounted</th>
                    <th align="left" width="100">Photo</th>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>



                <?php foreach ($orderItems as $orderItem) { ?>
                    <tr>
                        <td><?php echo $orderItem->Id; ?></td>
                        <td><?php echo $orderItem->Description; ?></td>
                        <td><?php echo $orderItem->Category; ?></td>
                        <td><?php echo $orderItem->Artist; ?></td>
                        <td><?php echo $orderItem->StockQuantity; ?></td>
                        <td><?php echo $orderItem->BuyCost; ?></td>
                        <td><?php echo $orderItem->SalePrice; ?></td>
                        <td><?php echo $orderItem->PriceDiscounted; ?></td>
                        <td><img src="<?php echo base_url() . "assets/images/orderItems/" . 'thumbs/' . $orderItem->Photo; ?>"></td>
                        <td><?php echo anchor('Products/vieworderItem/' . $orderItem->Id, 'View'); ?></td>
                        <td><?php echo anchor('shoppingcart/addProductToCart/' . $orderItem->Id, 'Add to Cart'); ?></td>
                        <td><?php echo anchor('Products/editorderItem/' . $orderItem->Id, 'Update'); ?></td>
                        <td><?php echo anchor(
                                'Products/deleteorderItem/' . $orderItem->Id,
                                'Delete',
                                'onclick="return checkDelete()"'
                            ); ?></td>
                    </tr>
                <?php } ?>
            </table>
        </td>
    </tr>

</table>
<?Php

echo '</br></br>Category : ';
echo form_input('Category', $orderItem->Category, 'readonly');

echo '</br></br>Artist : ';
echo form_input('Artist', $orderItem->Artist, 'readonly');

echo '</br></br>Product in stock : ';
echo form_input('prodQtyInStock', $orderItem->StockQuantity, 'readonly');

echo '</br></br>Cost : ';
echo form_input('prodBuyCost', $orderItem->BuyCost, 'readonly');

echo '</br></br>Sale Price : ';
echo form_input('prodSalePrice', $orderItem->SalePrice, 'readonly');

echo '</br></br>Discount : ';
echo form_input('priceAlreadyDiscounted', $orderItem->PriceDiscounted, 'readonly');

echo '</br></br>';
echo '<img src=' . base_url() . "assets/images/orderItems/" . 'full/' . $orderItem->Photo . '>';

echo '</br></br>';
echo form_close();
