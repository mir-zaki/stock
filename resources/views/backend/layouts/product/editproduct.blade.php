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

                        <form action="{{route('product.update',$products->id)}}" method="post" class="form-horizontal form-label-left"
                            novalidate>


                            <span class="section">Add product</span>


                            @csrf
                            @method('put')
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ProductName">Product
                                    Name

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="{{$products->name}}" id="ProductName" class="form-control col-md-7 col-xs-12" name="name"
                                        placeholder="Product name" required="required" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">
                                    Sale price
                                </label>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="{{$products->price}}" readonly id="price" class="form-control col-md-7 col-xs-12" name="price"
                                        placeholder="Enter price" required="required" type="price">
                                </div>
                            </div>


                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Product description
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="{{$products->description}}"type="text" id="description" name="description" required="required"
                                        placeholder="Enter description" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="availability">Available
                                    
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select value="{{$products->availability}}" id="availability" name="availability">
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
