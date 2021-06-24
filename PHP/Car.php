<?php
require_once 'Account.php';
class Car
{
    public $id;
    public $license;
    public $driver;
    protected $passengers;

    public function __construct($license, $driver)
    {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function PrintDataCar()
    {
        echo "license: {$this->license}, driver: {$this->driver->name}
        ";
    }

    public function getPassengers() {
        return $this->passenger;
    }

    public function setPassengers($passenger) {
        
        if ($passenger == 4) {
            $this->passenger = $passenger;
        }
        else {
            echo "Necesitas asignar 4 pasajeros
            ";
        }
    
    }
}
