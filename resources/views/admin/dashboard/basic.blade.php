@extends('admin.layouts.layout-basic')

@section('content')
<div class="main-content" id="dashboardPage">
    <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-3">
            <a class="dashbox" href="#">
                <i class="icon-fa icon-fa-envelope text-primary"></i>
                <span class="title">
                    {{ $manifests }}
                </span>
                <span class="desc">
                    MANIFEST
                </span>
            </a>
        </div>
        {{--
            Tracking PENDING->count()
            --}}
        <div class="col-md-12 col-lg-6 col-xl-3">
            <a class="dashbox" href="#">
                <i class="icon-fa icon-fa-ticket text-success"></i>
                <span class="title">
                    {{ $pendings }}
                </span>
                <span class="desc">
                    PENDING
                </span>
            </a>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-3">
            <a class="dashbox" href="#">
                <i class="icon-fa icon-fa-ship text-danger"></i>
                <span class="title">
                    {{ $shipments }}
                </span>
                <span class="desc">
                    SHIPMENT
                </span>
            </a>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-3">
            <a class="dashbox" href="#">
                <i class="icon-fa icon-fa-comments text-info"></i>
                <span class="title">
                    0
                </span>
                <span class="desc">
                    Comments
                </span>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-xl-6 mt-2">
            <div class="card">
                <div class="card-header">
                    <h6><i class="icon-fa icon-fa-line-chart text-warning"></i> Traffic Goods </h6>
                </div>
                <div class="card-body">
                    <line-chart :labels="['Jan','Feb','Mar','June']" :values="[20,30,40,60]"></line-chart>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xl-6 mt-2">
            <div class="card">
                <div class="card-header">
                    <h6><i class="icon-fa icon-fa-bar-chart text-success"></i> Shipment Chart</h6>
                </div>
                <div class="card-body">
                    <bar-chart :labels="['Jan','Feb','Mar','June']" :values="[20,30,40,60]"></bar-chart>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-xl-6 mt-2">
            <div class="card">
                <div class="card-header">
                    <h6><i class="icon-fa icon-fa-shopping-cart text-danger"></i> Recent Senders</h6>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trackings as $tracking)
                            <tr>
                                <td> {{ $tracking->pengirim->nama_pengirim }} </td>
                                <td> {{ $tracking->pengirim->created_at }} </td>
                                <td> {{ $tracking->tarif->total }} </td>
                                <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                            </tr>
                            @endforeach
                            {{-- @foreach ($pengirims as $pengirim)
                            <tr>
                                <td> {{ $pengirim->nama_pengirim }} </td>
                            <td> {{ $pengirim->created_at }} </td>
                            <td> {{ $pengirim->trackings }} </td>
                            <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                            </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xl-6 mt-2">
            <div class="card">
                <div class="card-header">
                    <h6><i class="icon-fa icon-fa-users text-info"></i> New Customers</h6>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengirims as $pengirim)
                            <tr>
                                <td> {{ $pengirim->nama_pengirim }} </td>
                                <td> {{ $pengirim->no_telpon }} </td>
                                <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop