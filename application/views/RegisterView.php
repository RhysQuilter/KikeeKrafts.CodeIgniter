<form action="<?php echo site_url("register/handleRegistration"); ?>" method="post">

    <table class="table table-striped">
        <tbody>
            <tr>
                <th>Email:</th>
                <td><input autofocus class="form-control" id="Email" name="Email" placeholder="Email address" required type="email"></td>
            </tr>
            <tr>
                <th>First Name:</th>
                <td><input autofocus class="form-control" id="FirstName" name="FirstName" placeholder="First Name" required type="text"></td>
            </tr>
            <tr>
                <th>Last Name:</th>
                <td><input autofocus class="form-control" id="LastName" name="LastName" placeholder="Last Name" required type="text"></td>
            </tr>
            <tr>
                <th>Phone Number:</th>
                <td><input autofocus class="form-control" id="PhoneNumber" name="PhoneNumber" placeholder="Phone Number" required type="telephone"></td>
            </tr>
            <tr>
                <th>Password:</th>
                <td><input autofocus class="form-control" id="Password" name="Password" placeholder="Password" required type="password"></td>
            </tr>
            <tr>
                <th>Confirm Password:</th>
                <td><input autofocus class="form-control" id="ConfirmPassword" name="ConfirmPassword" placeholder="Password" required type="password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php if (isset($error)) { ?>
                        <p class="error"><?php echo $error ?></p>
                    <?php } ?>
                </td>
            </tr>
        </tbody>
    </table>