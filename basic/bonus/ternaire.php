<?php

// Le ternaire est un comme un if mais en une instruction

if (true) {
    echo "Vrai";
}
else {
    echo "Faux";
}

echo true ? "Vrai" : "Faux";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <button <?= true ? "disabled" : "" ?> >Clique ici</button>

</body>
</html>