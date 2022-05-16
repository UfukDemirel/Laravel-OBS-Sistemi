<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;
use function Symfony\Component\Translation\t;

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

    public function profil(){
        return $this->select('*')
            ->join('city','users.city','=','city.id')
            ->where('users.id','=',Auth::id())
            ->get();
    }

    public function userpost(){
        return $this->select('grade.grade_id','grade.class_name','grade.class_code','grade.compulsory'
        ,'grade.class_akts','grade.class_quota','record.id','record.active','users.credit','record.grade_class_akts')
            ->join('record','record.users_id','=','users.id')
            ->join('grade','grade.grade_id','=','record.grade_id')
            ->where('users.id',Auth::id())
            ->get();
    }

    public function user(){
        return $this->select('*')
            ->join('record','record.users_id','=','users.id')
            ->join('grade','grade.grade_id','=','record.grade_id')
            ->where('users.id',Auth::id())
            ->get();
    }

    public function record(){
        return $this->select('*')
            ->join('record','users.id','=','record.users_id')
            ->join('grade','record.grade_id','=','grade.grade_id')
            ->where('users.id',Auth::id())
            ->update([
                "active"=>1
            ]);
    }

    public function details($id){
        return $this->select('*')->where('users.id','=',$id)->get();
    }

    public function batu(){
        return $this->select('*')
            ->join('record','users.id','=','record.users_id')
            ->join('grade','record.grade_id','=','grade.grade_id')
            ->where('users.id',Auth::id())
            ->get();
    }
}
