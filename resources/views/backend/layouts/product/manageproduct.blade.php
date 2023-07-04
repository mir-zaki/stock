@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <h3>Manage products</h3>



        </div>

        <div class="clearfix"></div>
        <br>
        <div id="messages"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table class="table">
                            <span class="section">Manage products</span>
                            <div>

                            </div>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Sale price</th>
                                    <th scope="col">Product description</th>
                                    <th scope="col">Product Category</th>
                                    <th scope="col">Availability</th>
                                    <th>Action</th>


                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->name}}</td>
                                    <td>{{ $product->price}}</td>
                                    <td>{{ $product->description}}</td>
                                    <td>{{ $product->category->name}}</td>
                                    <td>{{ $product->availabilty}}</td>
                                    <td>
                                        <a href="{{route('product.edit',$product->id)}}"><i class="fa fa-pencil-square-o" style="font-size:24px"></i></a>
                                        <a onclick="return confirm('Are you sure want to delete this item?');" href="{{route('product.delete',$product->id)}}"><i class="fa fa-close" style="font-size:24px;color:red"></i></a>
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




@endsection
