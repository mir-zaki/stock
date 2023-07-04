@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <h3>Manage Stocks</h3>



        </div>

        <div class="clearfix"></div>
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table class="table">
                            <span class="section">Manage Stocks</span>
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Available Stock</th>

                                    <!-- <th>Action</th> -->


                                </tr>
                            </thead>

                            <tbody>  
                            @foreach ($stocks as $stock)
                                <tr>
                                  
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $stock->product->name}}</td>
                                    <td>{{ $stock->quantity}}</td>
                                    
                                    
                                   
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
