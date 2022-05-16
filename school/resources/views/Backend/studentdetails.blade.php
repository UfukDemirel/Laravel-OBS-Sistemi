@extends('Backend.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div align="right"><a href="{{route('student')}}"><button class="btn btn-light">Back</button></a></div>
                            @foreach($post as $key)
                                <form class="form-sample" action="{{route('studentdetailspost',['id'=>$key->id])}}" method="post">
                                    @csrf
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">First Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="name" required value="{{$key->name}}" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Faculty</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="faculty" readonly value="{{$key->faculty}}" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Last Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="surname" required value="{{$key->surname}}" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Episode</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="episode" required readonly value="{{$key->episode}}" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Gender</label>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                    <select name="gender" class="form-control" id="">
                                                        <option @if($key->gender==0) {{'selected'}} @endif value="0">Kadın</option>
                                                        <option @if($key->gender==1) {{'selected'}} @endif value="1">Erkek</option>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Class</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="class" required value="{{$key->class}}" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Phone</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="phone" required value="{{$key->phone}}" class="form-control" placeholder="0(___) ___ ____"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="number" required readonly value="{{$key->number}}" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">İdentity</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="identity" readonly required value="{{$key->identity}}" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">School - City</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="school_city" readonly required value="{{$key->school_city}}" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Date of Birth</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" required readonly name="birth" value="{{$key->birth}}" placeholder="dd/mm/yyyy"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6"></div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">E-Mail</label>
                                                <div class="col-sm-9">
                                                    <input type="text" required name="email" readonly value="{{$key->email}}" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">E-Mail Verify</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="email_verify" readonly required value="{{$key->email_verify}}" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="card-description">
                                        Address
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Address</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" required name="address" value="{{$key->address}}"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Postcode</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" required name="post_code" value="{{$key->post_code}}" placeholder="(_____)"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">City</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" required name="city" value="{{$key->city}}" placeholder="(_____)"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">County</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" required name="county" value="{{$key->county}}"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div align="right">
                                        <button type="submit" class="btn btn-dark mr-2">Save</button>
                                    </div>
                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

