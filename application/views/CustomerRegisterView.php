<html>

<head>
    <title><?php echo $pageTitle; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
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