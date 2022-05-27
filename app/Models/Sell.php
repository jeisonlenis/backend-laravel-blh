<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Facade\FlareClient\Http\Client;

class Sell extends Model
{

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'vendedor_id',
        'cliente_id',
        'auto_id',
        'modelo',
        'vendedor',
        'cliente',
        'anio',
        'color',
        'anio_venta',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
