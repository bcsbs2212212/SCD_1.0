<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = ['name', 'price', 'quantity'];

    protected $table = 'inventories'; // Ensure this matches your database table

}
