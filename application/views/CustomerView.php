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
                <th>Edit Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $customer->custNumber; ?></td>
                <td><?php echo $customer->FirstName; ?></td>
                <td><?php echo $customer->LastName; ?></td>
                <td><?php echo $customer->PhoneNumber; ?></td>
                <td><a href="<?php echo site_url('customeredit/' . $customer->custNumber); ?>">Edit Details</a></td>
            </tr>
        </tbody>
    </table>

</body>

</html>