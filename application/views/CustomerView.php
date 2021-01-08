<html>

<head>
    <title><?php echo $pageTitle; ?></title>
</head>

<body>
    <h1><?php echo $heading; ?></h1>

    <table>
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
                <td><a href="<?php echo site_url('customeredit/' . $customer->Id); ?>">Edit Details</a></td>

            </tr>

        </tbody>
    </table>

</body>

</html>