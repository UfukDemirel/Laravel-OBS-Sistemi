<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Episode;
use App\Models\Faculty;
use App\Models\School_City;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    /* @var User|Model
     * @var Faculty|Model
     * @var Episode|Model
     */

    public $user;
    public $facultys;
    public $episode;

    public function __construct(User $user, Faculty $facultys, Episode $episode)
    {
        $this->user = $user;
        $this->facultys = $facultys;
        $this->episode = $episode;
    }

    public function dashboard(){
        return view('Backend.dashboard');
    }

    public function student(){
        $student = User::where('permission_level','=','user')->get();
        return view('Backend.student',compact('student'));
    }

    public function studentdetails($id){
        $post = $this->user->details($id);
        return view('Backend.studentdetails',compact('post'));
    }

    public function studentdetailspost(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            "gender"=>'required',
            'class'=>'required',
            'phone'=>'required',
            'number'=>'required',
            'identity'=>'required',
            'birth'=>'required',
            'email'=>'required',
            'email_verify'=>'required',
            'address'=>'required',
            'post_code'=>'required',
            'city'=>'required',
            'county'=>'required',
        ]);

            $post = DB::table('users')
                ->where('users.id','=',$id)
                ->update([
                    "name"=>$request->name,
                    "surname"=>$request->surname,
                    "gender"=>$request->gender,
                    "class"=>$request->class,
                    "phone"=>$request->phone,
                    "number"=>$request->number,
                    "identity"=>$request->identity,
                    "birth"=>$request->birth,
                    "email"=>$request->email,
                    "email_verify"=>$request->email_verify,
                    "address"=>$request->address,
                    "post_code"=>$request->post_code,
                    "city"=>$request->city,
                    "county"=>$request->county,
                    "is_active"=>1
                ]);
        if ($post){
                Alert::success('Great!', 'You are registered, you can login.');
                return redirect()->route('student',compact('post'));
        }else{
            Alert::error('Error!', 'We encountered a problem while updating.');
            return back();
        }
    }

    public function facultys(){
        $faculty = Faculty::all();
        return view('Backend.facultys',compact('faculty'));
    }

    public function facultysdetails($id){
        $faculty = $this->facultys->facultys($id);
        return view('Backend.facultysdetails',compact('faculty'));
    }

    public function facultysdetailspost(Request $request,$id){
       $request->validate([
            'faculty_name'=>'required',
            'faculty_slug'=>'required',
        ]);

        $faculty = DB::table('faculty')
            ->where('faculty.faculty_id','=',$id)
            ->update([
                "faculty_name"=>$request->faculty_name,
                "faculty_slug"=>$request->faculty_slug,
            ]);
        if ($faculty){
            Alert::success('Great!', 'Editing successful..');
            return redirect()->route('facultys',compact('faculty'));
        }else{
            Alert::error('Error!', 'Editing failed..');
            return back();
        }
    }

    public function episode(){
        $episode = $this->episode->episode();
        return view('Backend.episode',compact('episode'));
    }

    public function episodedetails($id){
        $hash = $this->episode->hash($id);
        return view('Backend.episodedetails',compact('hash'));
    }

    public function episodedetailspost(Request $request,$id){
        $request->validate([
            'episode_name'=>'required',
            'episode_faculty'=>'required',
        ]);

        $faculty = DB::table('episode')
            ->where('episode.episode_id','=',$id)
            ->update([
                "episode_name"=>$request->episode_name,
                "episode_faculty"=>$request->episode_faculty,
            ]);
        if ($faculty){
            Alert::success('Great!', 'Editing successful..');
            return redirect()->route('episode',compact('faculty'));
        }else{
            Alert::error('Error!', 'Editing failed..');
            return back();
        }
    }

    public function profile(){
        return view('Backend.profile');
    }

    public function profilepost(Request $request){
        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'identity'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'city'=>'required',
            'county'=>'required',
            'address'=>'required',
            'post_code'=>'required',
        ]);
        $post = DB::table("users")
            ->where('id',Auth::id())
            ->update([
                "name"=>$request->name,
                "surname"=>$request->surname,
                "identity"=>$request->identity,
                "phone"=>$request->phone,
                "email"=>$request->email,
                "city"=>$request->city,
                "county"=>$request->county,
                "address"=>$request->address,
                "post_code"=>$request->post_code,
            ]);
        if ($post){
            Alert::success('Great!', 'profile updated..');
            return back();
        }else{
            Alert::error('Error!', 'Profile could not be updated..');
            return back();
        }
    }
}
