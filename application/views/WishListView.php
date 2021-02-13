<?php echo form_open('path/to/controller/update/method'); ?>

<?php $this->load->helper("url"); ?>
<div class="list">
    <br><br>
    <h1 class="main">List of products</h1>
    <br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th align="left" width="100">Id</th>
                <th align="left" width="100">Description</th>
                <th align="left" width="100">SalePrice</th>
                <th align="left" width="100">Photo</th>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?php echo $product->Id; ?></td>
                    <td><?php echo $product->Description; ?></td>
                    <td><?php echo $product->SalePrice; ?></td>
                    <td><img src="<?php echo base_url() . "assets/images/products/" . 'thumbs/' . $product->Photo; ?>"></td>
                    <td><?php echo anchor('products/viewproduct/' . $product->Id, 'View', 'class="btn btn-primary"'); ?></td>
                    <td><?php echo anchor('shoppingcart/addProductToCart/' . $product->Id, 'Add to Cart', 'class="btn btn-success"'); ?></td>
                    <td><?php echo anchor('wishlist/remove/' . $product->Id, 'Remove From Wishlist', 'onclick="return checkDelete()" class="btn btn-danger"'); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
    <br><br>
</div>