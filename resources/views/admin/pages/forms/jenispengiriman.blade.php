@extends('admin.layouts.layout-basic')

@section('scripts')
<script src="/assets/admin/js/pages/validation.js"></script>
@stop

@section('content')
<div class="main-content">
    <div class="page-header">
        <h3 class="page-title">Form Jenis Pengiriman</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active">Form Jenis Pengiriman</li>
        </ol>
    </div>
    <div class="card">
        <div class="card-header">
            <h6>Jenis Pengiriman
                {{-- <a class="source-link" href="https://jqueryvalidation.org/" target="_blank">source</a> --}}
            </h6>
        </div>
        <div class="card-body">
            <form action="jenispengiriman" method="POST" id="jenidpengirimanForm" novalidate>
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Kode Pengiriman</label>
                    <input type="text" class="form-control" name="kd_pengiriman" placeholder="VIP">
                </div>
                <div class="form-group">
                    <label>Jenis Pengiriman</label>
                    <input type="text" class="form-control" name="nm_jns_pengiriman" placeholder="Jenis Pengiriman">
                </div>
                <div class="form-group">
                    <label>Harga Per Km</label>
                    <input type="number" class="form-control" name="harga_per_km" id="password" placeholder="123456">
                </div>
                <div class="form-group">
                    <div class="checkbox checkbox-full">
                        <label>
                            <input type="checkbox" value="" name="terms">
                            I Accept Terms & Conditions
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"> <span class="icon-im icon-im-checkbox-checked"></span>
                    Submit</button>
            </form>
        </div>
    </div>
</div>
@stop