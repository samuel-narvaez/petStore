<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    use HasFactory;
    protected $table = 'photos';

    protected $fillable = [
        'name', 'isActive', 'pet_id'
    ];

    protected $hidden = ['pet_id','created_at', 'updated_at'];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
