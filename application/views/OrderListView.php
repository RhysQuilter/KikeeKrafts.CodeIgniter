<?php $this->load->helper("url"); ?>
<div class="list">
	<br><br>
	<h1 class="main">List of orders</h1>
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



		<?php foreach ($orders as $order) { ?>
			<tr>
				<td><?php echo $order->Id; ?></td>
				<td><?php echo $order->Description; ?></td>
				<td><?php echo $order->Category; ?></td>
				<td><?php echo $order->Artist; ?></td>
				<td><?php echo $order->StockQuantity; ?></td>
				<td><?php echo $order->BuyCost; ?></td>
				<td><?php echo $order->SalePrice; ?></td>
				<td><?php echo $order->PriceDiscounted; ?></td>
				<td><img src="<?php echo base_url() . "assets/images/orders/" . 'thumbs/' . $order->Photo; ?>"></td>
				<td><?php echo anchor('orders/viewproduct/' . $order->Id, 'View'); ?></td>
				<td><?php echo anchor('orders/editproduct/' . $order->Id, 'Update'); ?></td>
				<td><?php echo anchor(
						'orders/deleteproduct/' . $order->Id,
						'Delete',
						'onclick="return checkDelete()"'
					); ?></td>
			</tr>
		<?php } ?>
	</table>
	<?php echo $this->pagination->create_links(); ?>
	<br><br>
</div>