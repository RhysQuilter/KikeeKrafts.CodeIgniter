<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Telephone</th>
            <th>View Details</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($customers as $customer) : ?>
            <tr>
                <td><?php echo $customer->Id; ?></td>
                <td><?php echo $customer->FirstName; ?></td>
                <td><?php echo $customer->LastName; ?></td>
                <td><?php echo $customer->PhoneNumber; ?></td>
                <td><a class="btn btn-primary" href="<?php echo site_url('customers/view/' . $customer->Id); ?>
                                                                            " role="button">view Details</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
