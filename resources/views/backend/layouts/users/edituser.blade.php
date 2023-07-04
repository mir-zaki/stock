@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Users</h3>
            </div>


        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <form action="{{route('user.update',$users->id)}}" method="post" class="form-horizontal form-label-left" novalidate>

                           
                            <span class="section">Add user</span>
                            @csrf
                            @method('put')
                            
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastName">Full Name
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="{{$users->fullname}}" id="lastName" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="fullname"
                                        placeholder="Full name" type="text">
                                </div>
                            </div>





                           


                           


                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Phone
                                    Number
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="{{$users->phone}}"  type="tel" id="telephone" name="phone" required="required"
                                        data-validate-length-range="8,20" placeholder="Enter phone number"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                          


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">Cancel</button>
                                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
