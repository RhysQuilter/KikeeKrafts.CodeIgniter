<html>

    <head>
        <title><?php echo $pageTitle; ?></title>
    </head>

    <body>
        <h1><?php echo $heading; ?></h1>

        <table>
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
                        <td><a href="<?php echo site_url('customers/' . $customer->Id); ?>">View Details</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </body>

</html>