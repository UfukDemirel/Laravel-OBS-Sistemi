<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Grade extends Model
{
    protected $table = 'grade';

    public function grade(){
        return $this->select('*')
            ->join('users','grade.class_class','=','users.class')
            ->where('users.id',Auth::id())
            ->where('grade.class_quota','>',0)
            ->get();
    }

    public function view(){
        return $this->select('*')
            ->get();
    }

    public function three(){
        return $this->select('*')
            ->where('class_class','=','3-1')
            ->get();
    }

    public function threetwo(){
        return $this->select('*')
            ->where('class_class','=','3-2')
            ->get();
    }
}
