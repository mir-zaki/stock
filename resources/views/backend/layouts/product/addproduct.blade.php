@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Products</h3>
            </div>



        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <form action="{{route('product.post')}}" method="post" class="form-horizontal form-label-left"
                            novalidate>


                            <span class="section">Add product</span>


                            @csrf


                            <div>

                                @if($errors->any())
                                @foreach($errors->all() as $error)
                                <div>
                                    <p class="alert alert-danger">{{$error}}</p>
                                </div>
                                @endforeach

                                @endif

                                @if(session()->has('message'))
                                <div class="row" style="padding: 20px;">
                                    <span class="alert alert-success">{{session()->get('message')}}</span>
                                </div>
                                @endif

                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ProductName">Product
                                    Name

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="ProductName" class="form-control col-md-7 col-xs-12" name="name"
                                        placeholder="Product name" required="required" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">
                                    Sale price
                                </label>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="price" class="form-control col-md-7 col-xs-12" name="price"
                                        placeholder="Enter price" required="required" type="price">
                                </div>
                            </div>








                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Product description
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="description" name="description" required="required"
                                        placeholder="Enter description" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Category
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select type="text" id="category" name="category" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                        @foreach ($categories as $category)


                                        <option value="{{$category->id}}">{{$category->name}}</option>

                                        @endforeach
                                    </select>
                                </div>

                            </div>


                            {{-- <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Brand
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select type="text" id="category" name="category" required="required"
                                         class="form-control col-md-7 col-xs-12">
                                        @foreach ($categories as $category)


                                        <option value="{{$category->id}}">{{$category->name}}</option>

                            @endforeach
                            </select>
                    </div>
                </div> --}}





                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="availability">Available

                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="availability" name="availability">
                            <option value="yes">Available</option>
                            <option value="no">Unavailable</option>
                        </select>
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
