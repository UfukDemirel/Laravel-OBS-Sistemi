@extends('Backend.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon"></div>
                    <form action="{{route('searchepisode')}}" method="get">
                        <input type="search" class="form-control" name="search" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                    </form>
                </div>
            </li>
            <br>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Episode Table</h4>
                            <div class="table-responsive pt-3">
                                <table class="table table-hover">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>
                                            İD
                                        </th>
                                        <th>
                                            Episode Name
                                        </th>
                                        <th>
                                            Episode Faculty İd
                                        </th>
                                        <th>

                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $key)
                                        <tr>
                                            <td>
                                                {{$key->episode_id}}
                                            </td>
                                            <td>
                                                {{$key->episode_name}}
                                            </td>
                                            <td>
                                                {{$key->episode_faculty}}
                                            </td>
                                            <td>
                                                <div align="right">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary">Details</button>
                                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuSplitButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton1">
                                                            <a class="dropdown-item" href="{{route('episodedetails',['id'=>$key->episode_id])}}">Faculty Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Faculty Delete</a>
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
