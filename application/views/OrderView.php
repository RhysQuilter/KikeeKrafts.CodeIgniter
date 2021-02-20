<?php $this->load->helper("url"); ?>
<table>
    <tr>
        <td colspan="2">
            <table>
                <tr>
                    <th scope="row">Order Number:</th>
                    <td><?php echo $order->Id; ?></td>
                </tr>
                <tr>
                    <th scope="row">Order Date:</th>
                    <td><?php echo $order->OrderDate; ?></td>
                </tr>
                <tr>
                    <th scope="row">Order Number:</th>
                    <td><?php echo $order->Id; ?></td>
                </tr>
                <tr>
                    <th scope="row">Order Number:</th>
                    <td><?php echo $order->Id; ?></td>
                </tr>
                <tr>
                    <th colspan="2" scope="row">Items:</th>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <table>
                <tr>
                    <th align="left" width="100">Description</th>
                    <th align="left" width="100">QtyInStock</th>
                    <th align="left" width="100">SalePrice</th>
                </tr>
                <?php foreach ($orderItems as $orderItem) { ?>
                    <tr>
                        <td><?php echo anchor('Products/viewproduct/' . $orderItem->ProductCode, $orderItem->ProductCode); ?></td>
                        <td><?php echo $orderItem->QuantityOrdered; ?></td>
                        <td><?php echo $orderItem->Price; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </td>
    </tr>

</table>
<?Php
