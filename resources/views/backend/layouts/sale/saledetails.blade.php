@extends('backend.master')
@section('content')
@php
$total=0;
@endphp

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
                                    <th>No.</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Sub total</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach($details as $sale)
                                @php
                                $total=$sale->sub_total+ $total
                                @endphp


                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$sale->product->name}}</td>
                                    <td>{{$sale->qty}}</td>
                                    <td>{{$sale->sale_price}}</td>
                                    <td>{{$sale->sub_total}}</td>


                                </tr>
                                @endforeach()
                            </tbody>

                        </table>
                        <tr>
                            <th>Total: {{$total}} TK</th>
                        </tr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
