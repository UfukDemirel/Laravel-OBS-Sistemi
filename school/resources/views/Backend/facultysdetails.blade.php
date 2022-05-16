@extends('Backend.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('facultys')}}"><div align="right"><button class="btn btn-light">Cancel</button></div></a>
                            <h4 class="card-title">Facultys Edit</h4>
                            @foreach($faculty as $key)
                            <form class="forms-sample" method="post" action="{{route('facultysdetailspost',['id'=>$key->faculty_id])}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Faculty Name</label>
                                    <input type="text" class="form-control" name="faculty_name" value="{{$key->faculty_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Faculty Surname</label>
                                    <input type="text" class="form-control" name="faculty_slug" value="{{$key->faculty_slug}}">
                                </div>
                                <div align="right"><button type="submit" class="btn btn-dark mr-2">Save</button></div>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
