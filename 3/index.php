
<?php
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'HighWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';
require_once 'LightableInterface.php';
require_once 'Speedometer.php';

$bicycle = new Bicycle('blue', 1);


$car = new Car('green', 4, 'electric');


$truck = new Truck('blue', 5, 'electric', 50);

$MotorWay = new MotorWay();

$ResidentialWay = new ResidentialWay();

$PedestrianWay = new PedestrianWay();

$MotorWay->addVehicle($car);

$PedestrianWay->addVehicle($bicycle);

echo Speedometer::retrieveMiles(10.12);
echo Speedometer::retrieveKilometer(10);


