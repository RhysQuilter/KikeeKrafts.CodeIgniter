<?php $this->load->helper("url"); ?>
<div class="list">
	<br><br>
	<h1 class="main">Orders Administration</h1>
	<br><br>
	<table class="table table-striped">
		<tr>
		
			<th align="left" width="100">Id</th>
			<th align="left" width="100">Order Date</th>
			<th align="left" width="100">Shipped Date</th>
			<th align="left" width="100">status</th>
			<th align="left" width="100">comments</th>
			<th align="left" width="100">customer number</th>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>



		<?php foreach ($orders as $order) { ?>
			<tr>
			
				<td><?php echo $order->Id; ?></td>
				<td><?php echo $order->OrderDate; ?></td>
				<td><?php echo $order->RequiredDate; ?></td>
				<td><?php echo $order->ShippedDate; ?></td>
				<td><?php echo $order->Status; ?></td>
				<td><?php echo $order->Comments; ?></td>
				<td><?php echo $order->CustomerNumber; ?></td>	
				<td><?php echo anchor('orders/view/' . $order->Id, 'View', 'class="btn btn-primary"'); ?></td>
				<td><?php echo anchor('orders/edit/' . $order->Id, 'Update', 'class="btn btn-success"'); ?></td>
				<td><?php echo anchor('orders/deleteorder/' . $order->Id,'Delete','onclick="return checkDelete()" class="btn btn-danger"'); ?></td>
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
	<br><br>
</div>