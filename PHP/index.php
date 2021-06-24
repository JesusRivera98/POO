<?php
require_once 'Car.php';
require_once 'uberX.php';
require_once 'Account.php';

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->passengers = 4;
//System.out.println("Car License: " + car.license);
$uberX->printDataCar();

$car2 = new Car("QWE567", new Account("Andrea Herrera", "AND567"));
$car2->passengers = 3;
//System.out.println("Car License: " + car2.license);
$car2->printDataCar();
