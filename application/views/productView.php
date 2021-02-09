<?php $this->load->helper("url"); ?>
<?php

echo form_open();
echo '</br></br>';
?>
<table class="table table-striped"
    <tr>
        <th scope="row">Product Code:</th>
        <td><?php echo $product->Id; ?></td>
    </tr>

    <tr>
        <th scope="row">Description:</th>
        <td><?php echo $product->Description; ?></td>
    </tr>



<tr>
        <th scope="row">Category:</th>
        <td><?php echo $product->Category; ?></td>
    </tr>
    
    <tr>
        <th scope="row">Artist:</th>
        <td><?php echo $product->Artist; ?></td>
    </tr>
    
    <tr>
        <th scope="row">Product in Stock:</th>
        <td><?php echo $product->StockQuantity;?></td>
    </tr>
    
     <tr>
        <th scope="row">Purchase Cost:</th>
        <td><?php echo $product->BuyCost;?></td>
    </tr>
    
    <tr>
        <th scope="row">Sale Price:</th>
        <td><?php echo $product->SalePrice;?></td>
    </tr>
    
    <tr>
        <th scope="row">Discounted:</th>
        <td><?php echo $product->PriceDiscounted;?></td>
    </tr>
    
    <br>
    <tr>
        <th><?php echo '<img src=' . base_url() . "assets/images/products/" . 'full/' . $product->Photo . '>';?></th>
        <td>  &nbsp;&nbsp;</td>
    </tr>
    </table>
