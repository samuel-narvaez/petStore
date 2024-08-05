<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pet';

    protected $fillable = [
        'name',
        'status',
        "category_id",
        "tags_id"
    ];

    protected $hidden = ['category_id','tags_id','created_at', 'updated_at', 'deleted_at'];

    public function tag() {
        return $this->belongsTo(Tags::class, 'tags_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function photos() {
        return $this->hasMany(Photos::class);
    }
}
