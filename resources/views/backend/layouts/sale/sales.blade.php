@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <h3>Manage Sales</h3>



        </div>

        <div class="clearfix"></div>
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table class="table">
                            <span class="section">Sales</span>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th scope="col">Invoice No</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Total price </th>
                                    <th scope="col">Sale by</th>
                                    <th scope="col">Action </th>
                                    

                                    <!-- <th>Action</th> -->


                                </tr>
                            </thead>
                            <tbody>

                                @foreach($sales as $sale)
                                
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>INV{{$sale->id}}</td>
                                    <td>{{$sale->sale_date}}</td>
                                    <td>{{$sale->customer->name}}</td>
                                    <td>{{$sale->total_price}}</td>
                                    <td>{{$sale->User->fullname}} ({{$sale->User->type}})</td>
                                    <td><a href="{{route('saledetails', $sale->id)}}"><i class="fa fa-list" style="font-size:24px"></i></a>
</td>


                                </tr>
                                @endforeach()
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
