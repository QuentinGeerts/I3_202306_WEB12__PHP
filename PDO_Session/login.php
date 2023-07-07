<?php

session_start();

if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $pwd = trim($_POST['password']);


    if (!empty($email) && !empty($pwd)) {
        
        include_once "./connect_database.php";

        # Vérifier si l'email existe
        $query = "SELECT email FROM person WHERE email = :email";
        $object = $database->prepare($query);

        $options = array (
            ":email" => $email
        );

        if ($object->execute($options)) {

            if(count($object->fetchAll()) > 0) {
                # Email est trouvée

                $query = "SELECT * FROM person WHERE email = :email AND password = sha2(:password, 256)";
                $object = $database->prepare($query);
                $options = array(
                    ":email" => $email,
                    ":password" => $pwd
                );
                if ($object->execute($options)) {
                    $user = $object->fetchAll();
                    
                    if (count($user) > 0) {
                        # Email et password OK
                        $_SESSION['email'] = $user[0]['email'];
                        header('Location: ./index.php');
                    } else {
                        # Email et password KO
                    }
                } else {
                    # Requête mal passée
                }
            }
            else {
                # Email n'est pas trouvée
            }

        }
            
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php include './menu.php'; ?>

    <form action="./login.php" method="post">

    <label for="email">Email :</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" required>

    <button type="submit" name="login">Se connecter</button>

    </form>

</body>

</html>