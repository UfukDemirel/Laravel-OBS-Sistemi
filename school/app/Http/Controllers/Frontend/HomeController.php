<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Grade;
use App\Models\Record;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Collection;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends BaseController
{

    /**@var Grade|Model
     * @var Record|Model
     * @var User|Model
     */

    public $grade;
    public $record;
    public $user;

    public function __construct(Grade $grade, Record $record, User $user){
        $this->grade = $grade;
        $this->record = $record;
        $this->user = $user;
    }

    public function home(){
            return view('Frontend.home');
    }

    public function user(){
        return view('Frontend.user');
    }

    public function class(){
        $three= $this->grade->three();
        $threetwo=$this->grade->threetwo();
        $class = $this->grade->grade();
        $user = $this->user->user();
        $post = $this->user->userpost();
        $ufuk = collect($post->toArray());
        $melih = array();
        foreach($ufuk as $key){
            $melih[]=$key['grade_id'];
        }

        $post = $this->user->userpost();
        $ufuk = collect($post->toArray());
        $ders = array();
        foreach($ufuk as $key){
            $ders[]=$key['grade_class_akts'];
        }
        $toplam = array_sum($ders);
        return view('Frontend.class',compact('class','post','melih','three','threetwo','user','toplam'));
    }

    public function classpost(Request $request)
    {
        $post = $this->user->userpost();
        $ufuk = collect($post->toArray());
        $melih = array();
        foreach($ufuk as $key){
            $melih[]=$key['grade_id'];
        }
        $class = $this->grade->grade();
        $log = DB::table('record')->insert([
            "grade_id" => $request->grade_id,
            "grade_class_akts"=>$request->grade_class_akts,
            "grade_class_class"=>$request->grade_class_class,
            "users_id" => $request->users_id,
            "active"=>0,
        ]);

            $vr = DB::table('grade')
                ->select('class_quota')
                ->where('grade_id',$request->grade_id)
                ->first('class_quota');

            DB::table('grade')
                ->where('grade_id',$request->grade_id)
                ->update([
               "class_quota"=>$vr->class_quota-1
                ]);

        if ($log) {
        Alert::success('Great!', 'Congratulations, the lesson has been successfully added..');
        return back();
        } else {
        Alert::error('Error!', 'Sorry, Course could not be added...');
        return back();
        }

    }

    public function edit(){
        $profil = $this->user->profil();
        return view('Frontend.edit',compact('profil'));
    }

    public function editpost(Request $request){
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
            ->where('id',Auth::user()->id)
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
            return view('Frontend.profil');
        }else{
            Alert::error('Error!', 'Profile could not be updated..');
            return back();
        }
    }

    public function delete($id){
        $gub = DB::table('record')
            ->select('grade_id')
            ->where('id',$id)
            ->first('grade_id');

        $vr = DB::table('grade')
            ->select('class_quota')
            ->where('grade_id',$gub->grade_id)
            ->first('class_quota');

        DB::table('grade')
            ->where('grade_id',$gub->grade_id)
            ->update([
                "class_quota"=>$vr->class_quota+1
            ]);

      $delete = DB::table('record')->Delete($id);
        if ($delete){
            Alert::success('Great!', 'profile updated..');
            return back();
        }else{
            Alert::error('Error!', 'Profile could not be updated..');
            return back();
        }
    }

    public function record(){
        $post = $this->user->userpost();
        $ufuk = collect($post->toArray());
        $melih = array();
        foreach($ufuk as $key){
            $melih[]=$key['grade_id'];
        }
        $post = $this->user->userpost();
        $ufuk = collect($post->toArray());
        $ders = array();
        foreach($ufuk as $key){
            $ders[]=$key['grade_class_akts'];
        }
        $toplam = array_sum($ders);
        $record = $this->user->record();
        $class = $this->grade->grade();
        $post = $this->user->userpost();
        if ($record){
                Alert::success('Great!', 'The course registration process is successful..');
                return view('Frontend.class',compact('class','post','melih','toplam'));
        }else{
            Alert::error('Error!', 'Course registration failed..');
            return back();
        }
    }

    public function useredit(){
        return view('Frontend.useredit');
    }

    public function usereditpost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'identity' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'city' => 'required',
            'county' => 'required',
            'address' => 'required',
            'post_code' => 'required',
        ]);
        $post = DB::table("users")
            ->where('id', Auth::user()->id)
            ->update([
                "name" => $request->name,
                "surname" => $request->surname,
                "identity" => $request->identity,
                "phone" => $request->phone,
                "email" => $request->email,
                "city" => $request->city,
                "county" => $request->county,
                "address" => $request->address,
                "post_code" => $request->post_code,
            ]);
        if ($post) {
            Alert::success('Great!', 'profile updated..');
            return back();
        } else {
            Alert::error('Error!', 'Profile could not be updated..');
            return back();
        }
    }
}
