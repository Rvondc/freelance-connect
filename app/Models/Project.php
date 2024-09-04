<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'name',
        'description',
        'budget',
        'deadline',
        'status',
        'likes_counter',
        'rating',
        'feedback',
        'is_suspended',
        'client_id'
    ];

    public function getImages() {
        return ProjectImages::query()->where('project_id', '=', $this->id)->get();
    }

    public function client() {
        return $this->belongsTo(User::class, 'client_id');
    }

    protected function casts() {
        return [
            'deadline' => 'datetime',
        ];
    }

    use HasFactory;
}
