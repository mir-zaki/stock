@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <h3>Manage Purchase</h3>



        </div>

        <div class="clearfix"></div>
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table class="table">
                            <span class="section">Manage Purchase</span>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th scope="col">Purchase id</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Challan No</th>
                                    <th scope="col">Supplier</th>
                                    <th scope="col">Total price</th>                                                             
                                    <th scope="col">Received by</th>                                                             
                                    <th scope="col">Action</th>
                                   

                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($purchasehistories as $purchasehistory)
                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{$purchasehistory->id}}</td>
                                    <td>{{$purchasehistory->purchase_date}}</td>
                                    <td>{{$purchasehistory->challan_no}}</td>
                                    <td>{{$purchasehistory->supplier->name}}</td>
                                    <td>{{$purchasehistory->total_price}}</td>
                                    <td>{{$purchasehistory->User->fullname}} ({{$purchasehistory->User->type}})</td>
                                   

                                    
                                    <td>
                            <a href="{{route('details', $purchasehistory->id)}}"><i class="fa fa-list" style="font-size:24px"></i></a>

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
