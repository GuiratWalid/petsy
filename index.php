<?php 
    $host="localhost";
    $root="root";
    $mdp="";
    $db="petsy";
    $connexion=new mysqli($host,$root,$mdp,$db);
    if (mysqli_connect_errno()) {
        echo "Erreur de connexion à la base de données !";
    }
    $query1 = "SELECT * FROM animal";
    $result1 = $connexion->query($query1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <h1 class="center">Petsy</h1>
    <h6>E-commerce</h6>
    <p><?php echo "Hello World" ?></p>
    <?php while($row = $result1->fetch_assoc()){?>
        <h2><?php echo $row['nom'] ?></h2>
    <?php
        } 
    ?>
</body>

</html>