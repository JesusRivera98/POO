<?php
require_once 'Car.php';
require_once 'Account.php';

$car = new Car("AMQ123", new Account("Andres Herrera", "AND123"));
$car->passengers = 4;
//System.out.println("Car License: " + car.license);
$car->printDataCar();

$car2 = new Car("QWE567", new Account("Andrea Herrera", "AND567"));
$car2->passengers = 3;
//System.out.println("Car License: " + car2.license);
$car2->printDataCar();
