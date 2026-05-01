<?php
// Car.php
class Car {
    private $brand;
    private $model;
    private $year;
    private $speed;
    private $isRunning;

    public function __construct($brand, $model, $year = 2023) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->speed = 0;
        $this->isRunning = false;
    }

    // Getters
    public function getBrand() { return $this->brand; }
    public function getModel() { return $this->model; }
    public function getYear() { return $this->year; }
    public function getSpeed() { return $this->speed; }
    public function isRunning() { return $this->isRunning; }

    // Methods
    public function start() {
        $this->isRunning = true;
        echo "🚗 {$this->brand} {$this->model} started!<br>";
    }

    public function accelerate($increment) {
        if (!$this->isRunning) {
            echo "❌ Car must be started first!<br>";
            return;
        }
        $this->speed += $increment;
        echo "⚡ Speed increased to {$this->speed} km/h<br>";
    }

    public function brake($decrement) {
        $this->speed = max(0, $this->speed - $decrement);
        echo "🛑 Speed decreased to {$this->speed} km/h<br>";
    }

    public function stop() {
        $this->isRunning = false;
        $this->speed = 0;
        echo "⏹️ {$this->brand} {$this->model} stopped!<br>";
    }

    public function getInfo() {
        return "Car: {$this->brand} {$this->model} ({$this->year}) | Speed: {$this->speed} km/h | Running: " . 
               ($this->isRunning ? 'Yes' : 'No');
    }
}

// ElectricCar extends Car (Inheritance example)
class ElectricCar extends Car {
    private $batteryLevel;

    public function __construct($brand, $model, $year = 2023) {
        parent::__construct($brand, $model, $year);
        $this->batteryLevel = 100;
    }

    public function charge($amount) {
        $this->batteryLevel = min(100, $this->batteryLevel + $amount);
        echo "🔋 Battery charged to {$this->batteryLevel}%<br>";
    }

    public function getInfo() {
        return parent::getInfo() . " | Battery: {$this->batteryLevel}%";
    }
}
?>
