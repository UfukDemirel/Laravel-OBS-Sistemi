<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function searchfaculty(Request $request){
        $search = $request->get('search');
        $posts= DB::table('faculty')
            ->where('faculty_name','like',$search.'%')
            ->orWhere('faculty_id','like',$search.'%')->get();
        return view('search.searchfaculty',compact('posts'));
    }

    public function searchepisode(Request $request){
        $search = $request->get('search');
        $posts= DB::table('episode')
            ->where('episode_name','like',$search.'%')
            ->orWhere('episode_id','like',$search.'%')->get();
        return view('search.searchepisode',compact('posts'));
    }

    public function searchstudent(Request $request){
        $search = $request->get('search');
        $posts= DB::table('users')
            ->Where('name','like',$search.'%')
            ->orWhere('id','like',$search.'%')->get();
        return view('search.searchstudent',compact('posts'));
    }
}
