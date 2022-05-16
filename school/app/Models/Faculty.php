<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
   protected $table = "faculty";

    public function facultys($id){
        return $this->select('*')->where('faculty.faculty_id','=',$id)->get();
    }
}
