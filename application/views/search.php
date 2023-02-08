<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <style type="text/css">
    </style>
</head>
<body>
<div>
    <form method="get" action="">
        <input type="search" name="titre">
        <select name="categorie">
            <?php foreach ($categories as $categorie) { ?>
                <option value="<?=$categorie['idcategorie']?>"><?=$categorie['nomcategorie']?></option>
            <?php } ?>
        </select>
        <input type="submit" value="rechercher">
    </form>
</div>
</body>
</html>