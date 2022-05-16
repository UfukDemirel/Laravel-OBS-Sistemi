@extends('Frontend.home')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div align="right"><a href="{{route('exit')}}"><button class="btn btn-light">Exit</button></a></div>
                            <h4 class="card-title">Horizontal Two column</h4>
                            @foreach($post as $key)
                                <form class="form-sample" action="{{route('updatepost')}}" method="post">
                                    @csrf
                                    <p class="card-description">
                                        İnfo
                                    </p>
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
                                                    <select class="form-control" required name="faculty" value="{{$key->faculty}}">
                                                        <option></option>
                                                        <option value="1">İktisadi Ve İdari Bilimler Fakültesi</option>
                                                    </select>
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
                                                    <select class="form-control" name="episode" required value="{{$key->episode}}">
                                                        <option></option>
                                                        <option value="1">Yönetim Bilişim Sistemleri</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Gender</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" required name="gender" value="{{$key->gender}}">
                                                        <option></option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Class</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" required name="class" value="{{$key->class}}">
                                                        <option></option>
                                                        <option value="0">Hazırlık</option>
                                                        <option value="1-1">1-1</option>
                                                        <option value="1-2">1-2</option>
                                                        <option value="2-1">2-1</option>
                                                        <option value="2-2">2-2</option>
                                                        <option value="3-1">3-1</option>
                                                        <option value="3-2">3-2</option>
                                                        <option value="4-1">4-1</option>
                                                        <option value="4-2">4-2</option>
                                                    </select>
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
                                                    <input type="text" name="identity" required value="{{$key->identity}}" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">School-City</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" required name="school_city" value="{{$key->school_city}}">
                                                        <option></option>
                                                        <option value="1">ADANA</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Date of Birth</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" required name="birth" value="{{$key->birth}}" placeholder="dd/mm/yyyy"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6"></div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">E-Mail</label>
                                                <div class="col-sm-9">
                                                    <input type="text" required name="email" value="{{$key->email}}" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">E-Mail Verify</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="email_verify" required value="{{$key->email_verify}}" class="form-control" />
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
                                                    <select class="form-control" required name="city" value="{{$key->city}}">
                                                        <option></option>
                                                        <option value="1">ADANA</option>
                                                    </select>
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
                                        <button type="submit" class="btn btn-dark mr-2">Submit</button>
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
