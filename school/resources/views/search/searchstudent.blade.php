@extends('Backend.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon"></div>
                    <form action="{{route('searchstudent')}}" method="get">
                        <input type="search" class="form-control" name="search" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                    </form>
                </div>
            </li>
            <br>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Students</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>
                                            İd
                                        </th>
                                        <th>
                                            User
                                        </th>
                                        <th>
                                            Surname
                                        </th>
                                        <th>
                                            Class
                                        </th>
                                        <th>

                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $key)
                                        <tr>
                                            <td class="py-1">
                                                {{$key->id}}
                                            </td>
                                            <td class="py-1">
                                                <img src="/public/images/{{$key->file}}" alt="image"/>
                                            </td>
                                            <td>
                                                {{$key->name}} {{$key->surname}}
                                            </td>
                                            @if($key->class=="1-1")
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            @endif
                                            @if($key->class=="1-2")
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            @endif
                                            @if($key->class=="2-1")
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            @endif
                                            @if($key->class=="2-2")
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            @endif
                                            @if($key->class=="3-1")
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            @endif
                                            @if($key->class=="3-2")
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            @endif
                                            @if($key->class=="4-1")
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            @endif
                                            @if($key->class=="4-2")
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            @endif
                                            <td>
                                                <div align="right">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary">Details</button>
                                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuSplitButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton1">
                                                            <a class="dropdown-item" href="{{route('studentdetails',['id'=>$key->id])}}">Student Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Student Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
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
