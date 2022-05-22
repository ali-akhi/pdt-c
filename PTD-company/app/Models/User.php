<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'role',
    ];

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRolePersian(){
        if($this->role === 'user') return 'کاربر';
        if($this->role === 'Seniorـdeputy') return 'معاون ارشد';
        if($this->role === 'R_and_D_deputy') return 'معاون طرح و توسعه';
        if($this->role === 'Research_deputy') return 'معاون تحقیقات';
        if($this->role === 'arbiter') return 'داور';
        if($this->role === 'author') return 'نویسنده';
        if($this->role === 'Administrative_deputy') return 'نویسنده';
        if($this->role === 'Administrative_deputy') return 'کارشناس';
        if($this->role === 'Administrative_deputy') return 'مسئول فنی';
        if($this->role === 'Administrative_deputy') return 'مسئول سرمایه انسانی';
        if($this->role === 'Administrative_deputy') return 'سرمایه‌گذار';
    }

    public function getTimeRegister()
    {
        $reg_time= $this->created_at;
        $Current_time= date('Y-m-d H:i:s');
        $long_time= strtotime($Current_time) - strtotime($reg_time);
        $h= date('H', $long_time);
        $m= date('i', $long_time);
        $s= date('s', $long_time);
        $Y= date('Y', $long_time);
        $M= date('m', $long_time);
        $d= date('d', $long_time);
        if($h==0 && $m==0 && $s>0) return "الان";
        if($h > 0) return $h." ساعت قبل";
        if($h == 0) return $m." دقیقه قبل";
        if($d > 0) return $d." روز قبل";
        if($Y > 0) return $Y. " سال قبل";
        if($M > 0) return $M. " ماه قبل";

    }
}
