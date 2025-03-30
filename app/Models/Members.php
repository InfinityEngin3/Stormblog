<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Members extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $primaryKey = 'id';

    protected $table = 'members';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'member_username',
        'member_email',
        'sha_pass_hash',
        'member_avatar',
        'member_register',
        'member_group',
        'member_ip',
        'member_connection',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'sha_pass_hash',
        'remember_token',
    ];

    public $timestamps = false;

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

    public function getAuthPassword(){
        return $this->sha_pass_hash;
    }

    public function getRememberToken(){
        return $this->remember_token;
    }

    public function setRememberToken($value){
        $this->remember_token = $value;
    }

    public function getRememberTokenName(){
        return 'remember_token';
    }

    ########

    public function group(){

        return $this->belongsTo(Members_groups::class, 'member_group', 'id');

    }


}
