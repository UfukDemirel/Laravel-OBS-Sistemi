@extends('Backend.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Welcome Manager {{Auth::user()->name}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card tale-bg">
                        <div class="card-people mt-auto">
                            <img src="/resources/images/dashboard/people.svg" alt="people">
                            <div class="weather-info">
                                <div class="d-flex">
                                    <div>
                                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                                    </div>
                                    <div class="ml-2">
                                        <h4 class="location font-weight-normal">Bangalore</h4>
                                        <h6 class="font-weight-normal">India</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
               <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Demirel</span>
            </div>
        </footer>
    </div>
@endsection
