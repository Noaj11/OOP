{{-- laravel-app/resources/views/cars/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Laravel + PHP OOP Cars</h1>
    
    <form method="POST" action="{{ route('cars.index') }}" class="mb-4">
        @csrf
        <div class="row">
            <div class="col">
                <input type="text" name="brand" placeholder="Brand" class="form-control" required>
            </div>
            <div class="col">
                <input type="text" name="model" placeholder="Model" class="form-control" required>
            </div>
            <div class="col">
                <input type="number" name="year" placeholder="Year" class="form-control" required>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Add Car</button>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Year</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
            <tr>
                <td>{{ $car->brand }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->year }}</td>
                <td>${{ $car->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
