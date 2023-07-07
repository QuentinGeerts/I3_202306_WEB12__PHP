<?php

if (isset($_POST['edit'])) {
    # Edition

    echo "Edition";
}

if (isset($_POST['delete'])) {
    # Suppression

    echo "Suppression";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="." method="post">

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Éditer</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <button type="submit" name="edit">✏️</button>
                    </td>
                    <td>
                        <button type="submit" name="delete">🚮</button>
                    </td>
                </tr>
            </tbody>
        </table>
        
    </form>

</body>

</html>