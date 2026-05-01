<?php
// laravel-app/app/Models/Car.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model {
    use HasFactory;

    protected $fillable = ['brand', 'model', 'year', 'color', 'price'];

    protected $casts = [
        'year' => 'integer',
        'price' => 'decimal:2'
    ];

    public function scopeElectric($query) {
        return $query->where('brand', 'like', '%Tesla%')
                    ->orWhere('brand', 'like', '%Rivian%');
    }

    public function getFullNameAttribute() {
        return $this->brand . ' ' . $this->model;
    }
}
