<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Data_fake extends Model
{
    use HasFactory;
    protected $table='Data_fake';
    protected $fillable=['name','email', 'email_verification_token', 'email_verified_at'];
    public function isVerified()
    {
        return !is_null($this->email_verified_at);
    }
}
