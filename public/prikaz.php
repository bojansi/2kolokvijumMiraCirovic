<?php

    require_once '../telefon/TelefonDAO.php';

    if(!isset($_SESSION)) session_start();
    if($_SESSION['telefon']!=''){
        $dao = new TelefonDAO();
        $telefon = $_SESSION['telefon'];
        var_dump($telefon);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikaz</title>
</head>
<body>
        <ul>
        <?php
            foreach($telefon as $t){

            
        ?>
            <li>MARKA:  <?=$t['marka']?></li>
            <li>CENA:  <?=$t['cena']?></li>

        <?php
            }
        ?>
        </ul>

    <br>
    <a href="../?action=logout">Logout</a>
</body>
</html>
<?php
            
    }else{
        header('Location: ../index.php');
    }

?>