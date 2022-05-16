@extends('Backend.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('episode')}}"><div align="right"><button class="btn btn-light">Cancel</button></div></a>
                            <h4 class="card-title">Facultys Edit</h4>
                            @foreach($hash as $key)
                                <form class="forms-sample" method="post" action="{{route('episodedetailspost',['id'=>$key->episode_id])}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Episode Name</label>
                                        <input type="text" class="form-control" name="episode_name" value="{{$key->episode_name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputConfirmPassword1">Episode Faculty</label>
                                        <input type="text" class="form-control" name="episode_faculty" value="{{$key->episode_faculty}}">
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
