@extends('Frontend.home')
@section('content')
     <div class="main-panel">
         <div class="content-wrapper">
             <div class="row">
                 <div class="col-md-1"></div>
                 <div class="col-md-10 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div align="center"><h4 class="card-title">Profile Update</h4></div>
                            <form class="forms-sample" method="post" action="{{route('editpost')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Name</label>
                                    <input type="text" class="form-control" readonly name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Surname</label>
                                    <input type="email" class="form-control" readonly name="surname" value="{{\Illuminate\Support\Facades\Auth::user()->surname}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">İdentity</label>
                                    <input type="text" class="form-control" name="identity" value="{{\Illuminate\Support\Facades\Auth::user()->identity}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">City</label>
                                    <input type="text" class="form-control" name="city" value="{{\Illuminate\Support\Facades\Auth::user()->city}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">County</label>
                                    <input type="text" class="form-control" name="county" value="{{\Illuminate\Support\Facades\Auth::user()->county}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Address</label>
                                    <input type="text" class="form-control" name="address" value="{{\Illuminate\Support\Facades\Auth::user()->address}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Post-Code</label>
                                    <input type="text" class="form-control" name="post_code" value="{{\Illuminate\Support\Facades\Auth::user()->post_code}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">E-Mail</label>
                                    <input type="text" class="form-control" readonly name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
@endsection
