<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plat extends Model
{
    protected $fillade = [
        "nom",
        "prix",
        "images",
        "description"
    ];
}
