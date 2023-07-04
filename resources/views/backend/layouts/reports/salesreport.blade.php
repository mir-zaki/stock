@extends('backend.master')
@section('content')
@php
$total=0;
@endphp
<div class="" role="">
    <div class="">
        <div class="page-title">
            <h3>Report</h3>



        </div>
        <br>
        <br>
        <br>
        <form action="#" method="get">
            <div class="row book-form">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <span class="section">Select Date</span>
                    <input type="date" name="from_date" placeholder="Date" required="">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12"><br><br>
                    <button type="submit" class="btn btn-style btn-primary w-100 px-2">Search
                    </button>



                    <button class="btn btn-primary" onclick="printDiv('printableArea')">
                        <i class="fa fa-print"></i> Print
                    </button>


                </div>

            </div>

        </form>

        <div class="clearfix"></div>
        <br>
    <div id="printableArea">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table class="table">
                            <span class="section">Sales report</span>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th scope="col">Invoice No</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Total Price</th>
                                   


                                </tr>
                            </thead>
                            <tbody>

                                @foreach($sales as $sale)
                                @php
                                    $total=$sale->total_price+ $total
                                    @endphp

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$sale->id}}</td>
                                    <td>{{$sale->sale_date}}</td>
                                    <td>{{$sale->customer->name}}</td>
                                    <td>{{$sale->total_price}}</td>
                                    


                                </tr>
                                @endforeach()
                            </tbody>


                        </table>
                        <td>
                                <h4>Total- {{$total}} Tk</h4>
                            </td>
                    </div>
                </div>
            </div>
            </div>

        </div>
    </div>
</div>
</div>





@endsection
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }

</script>
