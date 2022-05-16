<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $table = "episode";

    public function episode(){
        return $this->select('*')
            ->join('faculty','faculty.faculty_id','=','episode_faculty')
            ->get();
    }

    public function hash($id){
        return $this->select('*')->where('episode.episode_id','=',$id)->get();
    }
}
