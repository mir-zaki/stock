@extends('backend.master')

@section('content')

<br>
<div class="row tile_count">
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-money"></i> Total Purchase value </span>
        <div class="count"></div>
        <span class="count_bottom"><i class="green"> </i> </span>
    </div>
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-dollar"></i> Total Sale value </span>
        <div class="count"></div>
        <span class="count_bottom"><i class="green"></i></span>
    </div>

    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-book"></i>Total Products</span>
        <div class="count"></div>
        <span class="count_bottom"><i class="green"> </i></span>

    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Suppliers</span>
        <div class="count"></div>
        <span class="count_bottom"><i class="red"> </i> </span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Customers</span>
        <div class="count green"></div>
        <span class="count_bottom"><i class="green"></i> </span>
    </div>


    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
        <div class="count"></div>
        <span class="count_bottom"><i class="green"></i> </span>
    </div>





    @endsection
