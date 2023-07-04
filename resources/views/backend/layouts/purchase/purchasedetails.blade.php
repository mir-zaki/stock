@extends('backend.master')
@section('content')

@php
    $total=0;
@endphp
                    
<div class="" role="">
    <div class="">
        <div class="page-title">
            <h3>Purchase details</h3>



        </div>
        <br>
        

        <div class="clearfix"></div>
        <br>
        
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">
                    <button class="btn btn-primary" onclick="printDiv('printableArea')">
                <i class="fa fa-printer"></i>Print
            </button>
            <a href="{{route('addpay.supplier',['id' => $id])}}" class="btn btn-primary">Payment</a>
            
                    <div id="printableArea">
                        <table class="table">
                            <span class="section">Purchase details</span>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Unit price</th>                         
                                    <th scope="col">Sub total</th>
                                    <!-- <th scope="col">Received by</th> -->

                                    <!-- <th>Action</th> -->


                                </tr>
                            </thead>
                            <tbody>
                            
                            @foreach ($details as $detail)

                            @php
                            
                            $total=$detail->sub_total+ $total;
                            @endphp
                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{$detail->product->name}}</td>
                                    <td>{{$detail->qty}}</td>
                                    <td>{{$detail->unit_price}}</td>
                                    <td>{{$detail->sub_total}}</td>
                                    
                                   


                                </tr>
                                @endforeach

                            </tbody> 
                            
                        </table>
                        
                        <h2><td>Total: {{$total}} TK</td></h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>





@endsection
