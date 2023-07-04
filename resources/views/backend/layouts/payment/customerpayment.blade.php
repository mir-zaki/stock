@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <h3>Payments</h3>



        </div>

        <div class="clearfix"></div>
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table class="table">
                            <span class="section">Customer Payments</span>
                            <thead>
                                <tr>

                                    <th>Date</th>
                                    <th>Account Type</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Pay Amount</th>
                                    <th>Pay Method</th>
                                    <th>Due</th>
                                    <th>Reference</th>


                                </tr>
                            </thead>

                            <tbody>

                                @foreach($pay as $supp)

                                @php
                                $due=$supp->amount-$supp->pay;
                                @endphp
                                <tr>
                                    <td>{{ $supp->payment_date }}</td>
                                    <td>{{ $supp->account_type }}</td>
                                    <td>{{ $supp->customer->name }}</td>
                                    <td>{{ $supp->amount }}</td>
                                    <td>{{ $supp->pay }}</td>
                                    <td>{{ $supp->pay_method }}</td>
                                    <td>{{$due}}</td>
                                    <td>{{ $supp->refer }}</td>




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
