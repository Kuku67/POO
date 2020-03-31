<?php
require_once ('Client.php');
require_once ('Compte.php');

// CLIENT 1
$client1 = new Client("Jean", "Michel", "10-03-1967", "Haguenau");
$compte1 = new Compte("Compte Courant", 1000, "€", $client1, 431679824275);
$compte5 = new Compte("Compte Courant", 2500, "$", $client1, 431679824275);
$compte2 = new Compte("Livret A", 15000, "€", $client1, 4673894612758);

// CLIENT 2
$client2 = new Client("Stephane", "Durand", "23-07-1987", "Strasbourg");
$compte3 = new Compte("Livret A", 5000, "€", $client2, 57814698354);
$compte4 = new Compte("Compte Courant", 750, "$", $client2, 435679145387);
$compte6 = new Compte("Compte Courant", 1500, "€", $client2, 435679145387);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Banque POO</title>
</head>
<body>
    <div id="wrapper">

        <!-- AFFICHAGE POUR TOUS LES CLIENTS DU TABLEAU -->

        <?php $clients = [$client1, $client2]; ?>
        <?php foreach($clients as $client) : ?>
        <?php $datas = $client->getInfos(); ?>
        <?php $accounts = $datas[4]; ?>
        <table>
            <thead>
                <tr>
                    <th colspan='3'>Titulaire</th>
                </tr>
                <tr>
                    <td><?= $datas[0]." ".$datas[1] ?></td>
                    <td><?= $datas[2] ?></td>
                    <td><?= $datas[3] ?></td>
                </tr>
                <tr>
                    <th>Comptes</th>
                    <th>Libellé</th>
                    <th>Solde</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach($accounts as $account) : ?>
                <tr>
                    <td>Compte n° <?= $account[3] ?></td>
                    <td><?= $account[0] ?></td>
                    <td><?= $account[1]." ".$account[2] ?></td>
                </tr>
        <?php endforeach; ?>
            </tbody>
        </table>
        <?php endforeach; ?>

        <!-- AFFICHAGE POUR TOUS LES COMPTES DU TABLEAU -->

        <?php $accounts = [$compte1, $compte2, $compte3, $compte4, $compte5, $compte6]; ?>
        <?php foreach($accounts as $account) : ?>
        <?php $datas = $account->getInfos(); ?>
        <?php $client = $datas[4]; ?>
        <table>
            <thead>
                <tr>
                    <th colspan='3'>Compte n° <?= $datas[0] ?></th>
                </tr>
                <tr>
                    <th colspan='3' class='light-th'>Titulaire</th>
                </tr>
                <tr>
                    <td><?= $client->getInfo("nom")." ".$client->getInfo("prenom") ?></td>
                    <td><?= $client->getInfo("age") ?></td>
                    <td><?= $client->getInfo("ville") ?></td>
                </tr>
                <tr>
                    <th colspan='2'>Libelle</th>
                    <th>Solde</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan='2'><?= $datas[1] ?></td>
                    <td><?= $datas[2]." ".$datas[3] ?></td>
                </tr>
            </tbody>
        </table>
        <?php endforeach; ?>
    </div>
</body>
</html>