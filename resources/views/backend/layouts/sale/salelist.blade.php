@extends('backend.master')
@section('content')

@php
   $total=0;
@endphp

<div class="" role="">
    <div class="">
        <div class="page-title">
       


        </div>

        <div class="clearfix"></div>
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                
                    <div class="x_content">






                <!-- Button trigger modal -->
                <button class="btn btn-primary" onclick="printDiv('printableArea')">
                    <i class="fa fa-printer"></i>Print
                   
                </button>
                <a href="{{route('addpay.customer',['id' => $id])}}" class="btn btn-primary">Payment</a>


                <br>
                <br>

            </div>
            
            <div id="printableArea">

                <div class="">
                    <div class="">
                        <!-- <h3 class="">Sale Details</h3> -->
                    </div>
                    
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="manageTable" class="table table-bordered table-striped">
                        <span class="section">Sale Details</span>
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




                                @foreach($salelist as $list)

                                @php
                                $total=$list->sub_total+ $total
                                @endphp

                                <tr>

                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$list->product->name}}</td>
                                    <td>{{$list->qty}}</td>
                                    <td>{{$list->sale_price}}</td>
                                    <td>{{$list->sub_total}}</td>






                                </tr>
                                @endforeach()

                            </tbody>



                        </table>
                        <tr>
                            <th>Total: {{$total}} TK</th>
                        </tr>

                    </div>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- col-md-12 -->
    </div>
    <!-- /.row -->


</section>





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




