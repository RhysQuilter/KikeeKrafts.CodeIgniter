<?php $this->load->helper("url"); ?>
<div class="list">
	<br><br>
	<h1 class="main">List of products</h1>
	<br><br>
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
				<td><?php echo anchor('Products/viewproduct/' . $product->Id, 'View'); ?></td>
				<td><?php echo anchor('shoppingcart/addProductToCart/' . $product->Id, 'Add to Cart'); ?></td>
				<td><?php echo anchor('Products/editproduct/' . $product->Id, 'Update'); ?></td>
				<td><?php echo anchor(
						'Products/deleteproduct/' . $product->Id,
						'Delete',
						'onclick="return checkDelete()"'
					); ?></td>
			</tr>
		<?php } ?>
	</table>
	<?php echo $this->pagination->create_links(); ?>
	<br><br>
</div>