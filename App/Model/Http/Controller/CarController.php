<?php
// laravel-app/app/Http/Controllers/CarController.php
namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller {
    public function index() {
        $cars = Car::latest()->get();
        return view('cars.index', compact('cars'));
    }

    public function store(Request $request) {
        $car = Car::create($request->validated());
        return redirect()->route('cars.index')->with('success', 'Car added!');
    }

    public function apiCars() {
        return Car::electric()->get();
    }
}
