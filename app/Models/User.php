<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'username',
        'email',
        'user_type',
        'profile_picture',
        'banner_picture',
        'bio',
        'website_link',
        'birthdate',
        'is_suspended',
        'password',
    ];

    public function bookmarks() {
        return $this->hasMany(Bookmark::class, 'user_id');
    }

    public function jobs() {
        return $this->hasMany(Project::class, 'client_id');
    }

    public function getFullname()
    {
        if ($this->middle_name) {
            return $this->first_name . ' ' . $this->middle_name[0] . '. ' . $this->last_name;
        } else {
            return $this->first_name . ' ' . $this->last_name;
        }
    }

    public function getApprovalStatus() {
        $approval = CredentialApproval::query()->where('user_id', '=', $this->id)->first();

        if (!$approval) {
            throw new Exception('Credential Approval not found');
        }

        return $approval->status;
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
