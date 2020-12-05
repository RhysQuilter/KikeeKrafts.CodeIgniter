<html>

<head>
    <title><?php echo $pageTitle; ?></title>
</head>

<body>
    <h1><?php echo $heading; ?></h1>

    <form>
        <table>
            <tr>
                <th><label for="FirstName">Firstname:</label></th>
                <td><input id="FirstName" name="FirstName" type="text" required="true" /></td>
            </tr>
            <tr>
                <th><label for="Lastname">Lastname:</label></th>
                <td><input id="Lastname" name="Lastname" type="text" /></td>
            </tr>
            <tr>
                <th><label for="Telephone">Telephone:</label></th>
                <td><input id="Telephone" name="Telephone" type="telephone" /></td>
            </tr>
        </table>
    </form>

</body>

</html>