<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $appends = ['numberOfTopics'];
    protected $visible = ['id', 'name', 'description', 'numberOfTopics'];

    public function getNumberOfTopicsAttribute() {
        return $this->topics->count();
    }
    
    public function topics() {
        return $this->hasMany(Topic::class);
    }
}
