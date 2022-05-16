@extends('Frontend.home')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                 <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                                @if(\Illuminate\Support\Facades\Auth::user()->class=="1-1")
                                <h4 class="card-title">Ders Kayıt Durumu</h4>
                                <p>1 - 1st Grade Lessons</p>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>
                                                Code
                                            </th>
                                            <th>
                                                Class Name
                                            </th>
                                            <th>
                                                Compulsory
                                            </th>
                                            <th>
                                                AKTS
                                            </th>
                                            <th>
                                                Quota
                                            </th>
                                            <th>
                                                Process
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($class as $key)
                                            <form action="{{route('classpost')}}" method="post">
                                                @csrf
                                                <tr>
                                                    <td class="py-1">
                                                        {{$key->class_code}}
                                                    </td>
                                                    <td>
                                                        {{$key->class_name}}
                                                    </td>
                                                    <td class="py-1">
                                                        {{$key->compulsory}}
                                                    </td>
                                                    <td>
                                                        {{$key->class_akts}}
                                                    </td>
                                                    <td>
                                                        {{$key->class_quota}}
                                                    </td>
                                                    <td>
                                                        <input type="hidden" name="users_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                                        <input type="hidden" name="grade_id" value="{{$key->grade_id}}">
                                                        @if(!(in_array($key->grade_id,$melih)))
                                                            <button type="submit" class="btn btn-outline-success btn-fw">Save</button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            </form>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                                @if(\Illuminate\Support\Facades\Auth::user()->class=="1-2")
                                    <h4 class="card-title">Ders Kayıt Durumu</h4>
                                    <p>1 - 2st Grade Lessons</p>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Code
                                                </th>
                                                <th>
                                                    Class Name
                                                </th>
                                                <th>
                                                    Compulsory
                                                </th>
                                                <th>
                                                    AKTS
                                                </th>
                                                <th>
                                                    Quota
                                                </th>
                                                <th>
                                                    Process
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($class as $key)
                                                <form action="{{route('classpost')}}" method="post">
                                                    @csrf
                                                    <tr>
                                                        <td class="py-1">
                                                            {{$key->class_code}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_name}}
                                                        </td>
                                                        <td class="py-1">
                                                            {{$key->compulsory}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_akts}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_quota}}
                                                        </td>
                                                        <td>
                                                            <input type="hidden" name="users_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                                            <input type="hidden" name="grade_id" value="{{$key->grade_id}}">
                                                            @if(!(in_array($key->grade_id,$melih)))
                                                                <button type="submit" class="btn btn-outline-success btn-fw">Save</button>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </form>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                                @if(\Illuminate\Support\Facades\Auth::user()->class=="2-1")
                                    <h4 class="card-title">Ders Kayıt Durumu</h4>
                                    <p>2 - 1st Grade Lessons</p>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Code
                                                </th>
                                                <th>
                                                    Class Name
                                                </th>
                                                <th>
                                                    Compulsory
                                                </th>
                                                <th>
                                                    AKTS
                                                </th>
                                                <th>
                                                    Quota
                                                </th>
                                                <th>
                                                    Process
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($class as $key)
                                                <form action="{{route('classpost')}}" method="post">
                                                    @csrf
                                                    <tr>
                                                        <td class="py-1">
                                                            {{$key->class_code}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_name}}
                                                        </td>
                                                        <td class="py-1">
                                                            {{$key->compulsory}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_akts}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_quota}}
                                                        </td>
                                                        <td>
                                                            <input type="hidden" name="users_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                                            <input type="hidden" name="grade_id" value="{{$key->grade_id}}">
                                                            <input type="hidden" name="grade_class_akts" value="{{$key->class_akts}}">
                                                            <input type="hidden" name="grade_class_class" value="{{$key->class_class}}">
                                                            @if(!(in_array($key->grade_id,$melih)))
                                                                <button type="submit" class="btn btn-outline-success btn-fw">Save</button>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </form>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                                    <br>
                                    <div align="left"> <b>AKTS Durumu: {{$toplam}} / {{Auth::user()->credit}}</b></div>
                                    <br>
                                @if(Auth::user()->agno>"3.00")
                                @if(\Illuminate\Support\Facades\Auth::user()->class=="2-1")
                                        <p>3 - 1st Grade Lessons</p>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        Code
                                                    </th>
                                                    <th>
                                                        Class Name
                                                    </th>
                                                    <th>
                                                        Compulsory
                                                    </th>
                                                    <th>
                                                        AKTS
                                                    </th>
                                                    <th>
                                                        Quota
                                                    </th>
                                                    <th>
                                                        Process
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($three as $key)
                                                    <form action="{{route('classpost')}}" method="post">
                                                        @csrf
                                                        <tr>
                                                            <td class="py-1">
                                                                {{$key->class_code}}
                                                            </td>
                                                            <td>
                                                                {{$key->class_name}}
                                                            </td>
                                                            <td class="py-1">
                                                                {{$key->compulsory}}
                                                            </td>
                                                            <td>
                                                                {{$key->class_akts}}
                                                            </td>
                                                            <td>
                                                                {{$key->class_quota}}
                                                            </td>
                                                            <td>
                                                                <input type="hidden" name="users_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                                                <input type="hidden" name="grade_id" value="{{$key->grade_id}}">
                                                                <input type="hidden" name="grade_class_akts" value="{{$key->class_akts}}">
                                                                @if(!(in_array($key->grade_id,$melih)))
                                                                    <button type="submit" class="btn btn-outline-success btn-fw">Save</button>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </form>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                @endif
                                @endif
                                @if(\Illuminate\Support\Facades\Auth::user()->class=="2-2")
                                    <h4 class="card-title">Ders Kayıt Durumu</h4>
                                    <p>2 - 2st Grade Lessons</p>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Code
                                                </th>
                                                <th>
                                                    Class Name
                                                </th>
                                                <th>
                                                    Compulsory
                                                </th>
                                                <th>
                                                    AKTS
                                                </th>
                                                <th>
                                                    Quota
                                                </th>
                                                <th>
                                                    Process
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($class as $key)
                                                <form action="{{route('classpost')}}" method="post">
                                                    @csrf
                                                    <tr>
                                                        <td class="py-1">
                                                            {{$key->class_code}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_name}}
                                                        </td>
                                                        <td class="py-1">
                                                            {{$key->compulsory}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_akts}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_quota}}
                                                        </td>
                                                        <td>
                                                            <input type="hidden" name="users_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                                            <input type="hidden" name="grade_id" value="{{$key->grade_id}}">
                                                            @if(!(in_array($key->grade_id,$melih)))
                                                                <button type="submit" class="btn btn-outline-success btn-fw">Save</button>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </form>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                                    <br>
                                    @if(\Illuminate\Support\Facades\Auth::user()->class=="2-2")
                                        <p>3 - 2st Grade Lessons</p>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        Code
                                                    </th>
                                                    <th>
                                                        Class Name
                                                    </th>
                                                    <th>
                                                        Compulsory
                                                    </th>
                                                    <th>
                                                        AKTS
                                                    </th>
                                                    <th>
                                                        Quota
                                                    </th>
                                                    <th>
                                                        Process
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($threetwo as $key)
                                                    <form action="{{route('classpost')}}" method="post">
                                                        @csrf
                                                        <tr>
                                                            <td class="py-1">
                                                                {{$key->class_code}}
                                                            </td>
                                                            <td>
                                                                {{$key->class_name}}
                                                            </td>
                                                            <td class="py-1">
                                                                {{$key->compulsory}}
                                                            </td>
                                                            <td>
                                                                {{$key->class_akts}}
                                                            </td>
                                                            <td>
                                                                {{$key->class_quota}}
                                                            </td>
                                                            <td>
                                                                <input type="hidden" name="users_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                                                <input type="hidden" name="grade_id" value="{{$key->grade_id}}">
                                                                @if(!(in_array($key->grade_id,$melih)))
                                                                    <button type="submit" class="btn btn-outline-success btn-fw">Save</button>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </form>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    @endif
                                @if(\Illuminate\Support\Facades\Auth::user()->class=="3-1")
                                    <h4 class="card-title">Ders Kayıt Durumu</h4>
                                    <p>3 - 1st Grade Lessons</p>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Code
                                                </th>
                                                <th>
                                                    Class Name
                                                </th>
                                                <th>
                                                    Compulsory
                                                </th>
                                                <th>
                                                    AKTS
                                                </th>
                                                <th>
                                                    Quota
                                                </th>
                                                <th>
                                                    Process
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($class as $key)
                                                <form action="{{route('classpost')}}" method="post">
                                                    @csrf
                                                    <tr>
                                                        <td class="py-1">
                                                            {{$key->class_code}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_name}}
                                                        </td>
                                                        <td class="py-1">
                                                            {{$key->compulsory}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_akts}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_quota}}
                                                        </td>
                                                        <td>
                                                            <input type="hidden" name="users_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                                            <input type="hidden" name="grade_id" value="{{$key->grade_id}}">
                                                            @if(!(in_array($key->grade_id,$melih)))
                                                                <button type="submit" class="btn btn-outline-success btn-fw">Save</button>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </form>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                                @if(\Illuminate\Support\Facades\Auth::user()->class=="3-2")
                                    <h4 class="card-title">Ders Kayıt Durumu</h4>
                                    <p>3 - 2st Grade Lessons</p>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Code
                                                </th>
                                                <th>
                                                    Class Name
                                                </th>
                                                <th>
                                                    Compulsory
                                                </th>
                                                <th>
                                                    AKTS
                                                </th>
                                                <th>
                                                    Quota
                                                </th>
                                                <th>
                                                    Process
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($class as $key)
                                                <form action="{{route('classpost')}}" method="post">
                                                    @csrf
                                                    <tr>
                                                        <td class="py-1">
                                                            {{$key->class_code}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_name}}
                                                        </td>
                                                        <td class="py-1">
                                                            {{$key->compulsory}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_akts}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_quota}}
                                                        </td>
                                                        <td>
                                                            <input type="hidden" name="users_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                                            <input type="hidden" name="grade_id" value="{{$key->grade_id}}">
                                                            @if(!(in_array($key->grade_id,$melih)))
                                                                <button type="submit" class="btn btn-outline-success btn-fw">Save</button>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </form>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                                @if(\Illuminate\Support\Facades\Auth::user()->class=="4-1")
                                    <h4 class="card-title">Ders Kayıt Durumu</h4>
                                    <p>4 - 1st Grade Lessons</p>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Code
                                                </th>
                                                <th>
                                                    Class Name
                                                </th>
                                                <th>
                                                    Compulsory
                                                </th>
                                                <th>
                                                    AKTS
                                                </th>
                                                <th>
                                                    Quota
                                                </th>
                                                <th>
                                                    Process
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($class as $key)
                                                <form action="{{route('classpost')}}" method="post">
                                                    @csrf
                                                    <tr>
                                                        <td class="py-1">
                                                            {{$key->class_code}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_name}}
                                                        </td>
                                                        <td class="py-1">
                                                            {{$key->compulsory}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_akts}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_quota}}
                                                        </td>
                                                        <td>
                                                            <input type="hidden" name="users_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                                            <input type="hidden" name="grade_id" value="{{$key->grade_id}}">
                                                            @if(!(in_array($key->grade_id,$melih)))
                                                                <button type="submit" class="btn btn-outline-success btn-fw">Save</button>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </form>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                                @if(\Illuminate\Support\Facades\Auth::user()->class=="4-2")
                                    <h4 class="card-title">Ders Kayıt Durumu</h4>
                                    <p>4 - 2st Grade Lessons</p>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Code
                                                </th>
                                                <th>
                                                    Class Name
                                                </th>
                                                <th>
                                                    Compulsory
                                                </th>
                                                <th>
                                                    AKTS
                                                </th>
                                                <th>
                                                    Quota
                                                </th>
                                                <th>
                                                    Process
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($class as $key)
                                                <form action="{{route('classpost')}}" method="post">
                                                    @csrf
                                                    <tr>
                                                        <td class="py-1">
                                                            {{$key->class_code}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_name}}
                                                        </td>
                                                        <td class="py-1">
                                                            {{$key->compulsory}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_akts}}
                                                        </td>
                                                        <td>
                                                            {{$key->class_quota}}
                                                        </td>
                                                        <td>
                                                            <input type="hidden" name="users_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                                            <input type="hidden" name="grade_id" value="{{$key->grade_id}}">
                                                            @if(!(in_array($key->grade_id,$melih)))
                                                                <button type="submit" class="btn btn-outline-success btn-fw">Save</button>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </form>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Alınan Dersler</h4>
                            <form action="{{route('record')}}" method="post">
                                @csrf
                                @if($toplam <= Auth::user()->credit)
                                    <div align="right"><div class="col-md-3"><button type="submit" class="btn btn-light">SAVE</button></div></div>
                                @endif
                            </form>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Compulsory
                                        </th>
                                        <th>
                                            AKTS
                                        </th>
                                        <th>
                                            Quota
                                        </th>
                                        <th>
                                            Process
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($post as $val)
                                        @if($val->active==0)
                                    <tr class="table table-hover">
                                        <td>
                                            {{$val->class_name}}
                                        </td>
                                        <td>
                                            {{$val->compulsory}}
                                        </td>
                                        <td>
                                            {{$val->class_akts}}
                                        </td>
                                        <td>
                                            {{$val->class_quota}}
                                        </td>
                                        <td width="10">
                                            <a href="{{route('delete',['id'=>$val->id])}}">
                                                <button class="btn btn-danger">Sil</button>
                                            </a>
                                        </td>
                                    </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
