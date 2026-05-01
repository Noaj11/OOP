<?php
// index.php
require_once 'Car.php';

echo "<h1>🚗 PHP OOP Car Demo</h1>";

// Create regular car
$toyota = new Car('Toyota', 'Camry', 2022);
$tesla = new ElectricCar('Tesla', 'Model 3');

// Demo regular car
echo "<h2>Regular Car Demo</h2>";
echo $toyota->getInfo() . "<br><br>";

$toyota->start();
$toyota->accelerate(30);
$toyota->accelerate(20);
$toyota->brake(10);
$toyota->stop();

echo "<br>Final status: " . $toyota->getInfo() . "<br><br>";

// Demo electric car
echo "<h2>Electric Car Demo</h2>";
echo $tesla->getInfo() . "<br><br>";

$tesla->start();
$tesla->accelerate(50);
$tesla->charge(20);
echo "<br>Final status: " . $tesla->getInfo() . "<br><br>";

// Array of cars (Polymorphism)
$cars = [
    new Car('BMW', 'X5', 2023),
    new Car('Honda', 'Civic', 2021),
    new ElectricCar('Rivian', 'R1T', 2024)
];

echo "<h2>All Cars</h2>";
foreach ($cars as $car) {
    echo $car->getInfo() . "<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP OOP Car Demo</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px; }
        h1, h2 { color: #333; }
        pre { background: #f4f4f4; padding: 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <?php echo ob_get_clean(); ?>
</body>
</html>
<?php ob_start(); ?>
