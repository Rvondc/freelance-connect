<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CredentialApproval extends Model
{
    use HasFactory;

    protected $table = 'credential_approvals';
    protected $fillable = [
        'front_id_image',
        'back_id_image',
        'selfie_image',
        'status',
        'user_id',
    ];
}
