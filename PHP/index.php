<?php
require_once 'Car.php';
require_once 'uberX.php';
require_once 'uberPool.php';
require_once 'Account.php';

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->passengers = 4;
//System.out.println("Car License: " + car.license);
$uberX->printDataCar();

$uberPool = new UberPool("QWE567", new Account("Andrea Ferran", "ANDA765"), "Dodge", "Attitude");
$uberPool->passengers = 3;
//System.out.println("Car License: " + car2.license);
$uberPool->printDataCar();

$uberVan = new UberVan("OJL395", new Account("Raúl Ramírez", "AND456"), "Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->printDataCar();
