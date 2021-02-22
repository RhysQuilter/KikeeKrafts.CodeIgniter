<?php $this->load->helper("url"); ?>
<div class="list">
	<br><br>
	<h1 class="main"> products Administration</h1>
	<br><br>
	<table class="table table-striped">
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
			<td>&nbsp;</td>
		</tr>



		<?php foreach ($products as $product) { ?>
			<tr>
				<td><?php echo $product->Id; ?></td>
				<td><?php echo $product->Description; ?></td>
				<td><?php echo $product->Category; ?></td>
				<td><?php echo $product->Artist; ?></td>
				<td><?php echo $product->StockQuantity; ?></td>
				<td><?php echo $product->BuyCost; ?></td>
				<td><?php echo $product->SalePrice; ?></td>
				<td><?php echo $product->PriceDiscounted; ?></td>
				<td><img src="<?php echo base_url() . "assets/images/products/" . 'thumbs/' . $product->Photo; ?>"></td>
				<td><?php echo anchor('products/viewproduct/' . $product->Id, 'View', 'class="btn btn-primary"'); ?></td>
				<td><?php echo anchor('shoppingcart/addProductToCart/' . $product->Id, 'Add to Cart', 'class="btn btn-success"'); ?></td>
				<td><?php echo anchor('wishlist/addProductTowishlist/' . $product->Id, 'Add to WishList', 'class="btn btn-warning"'); ?></td>
				<td><?php echo anchor('products/editproduct/' . $product->Id, 'Update', 'class="btn btn-primary"'); ?></td>
				<td><?php echo anchor('products/deleteproduct/' . $product->Id, 'Delete', 'onclick="return checkDelete()" class="btn btn-danger"'); ?></td>
			</tr>
		<?php } ?>
	</table>
	<ul class="pagination">
		<li class="page-item"><a class="page-link" href="#">Previous</a></li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item"><a class="page-link" href="#">Next</a></li>
	</ul>
</div>