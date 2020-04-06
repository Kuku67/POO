<?php
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