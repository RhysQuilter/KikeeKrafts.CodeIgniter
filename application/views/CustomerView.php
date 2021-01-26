<table class="table table-striped"
    <tbody>
        <tr>
            <th>Id:</th>
            <td><?php echo $customer->Id; ?></td>
        </tr>
        <tr>
            <th>First Name:</th>
            <td><?php echo $customer->FirstName; ?></td>
        </tr>
        <tr>
            <th>Last Name:</th>
            <td><?php echo $customer->LastName; ?></td>

        </tr>
        <tr>
            <th>Phone Number:</th>
            <td><?php echo $customer->PhoneNumber; ?></td>

        </tr>
        <tr>
            <th>Edit Details</th>
           <td><a class="btn btn-primary" href="<?php echo site_url('customers/edit/' . $customer->Id); ?>
                                                                            " role="button">view Details</a></td>
        </tr>
    </tbody>
</table>