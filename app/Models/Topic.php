<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Topic extends Model
{
    use HasFactory;

    protected $appends = ['time', 'user'];

    protected $visible = ['id', 'title', 'body', 'views', 'time', 'user', 'category_id'];

    public function getTimeAttribute() {
        return $this->created_at->timestamp;
    }

    public function getUserAttribute() {
        return $this->user()->select('id', 'name')->first();
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
