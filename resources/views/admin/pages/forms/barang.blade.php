@extends('admin.layouts.layout-basic')

@section('scripts')
<script src="/assets/admin/js/pages/validation.js"></script>
@stop

@section('content')
<div class="main-content">
    <div class="page-header">
        <h3 class="page-title">Form Pengirim</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active">Form Pengirim</li>
        </ol>
    </div>
    <div class="card">
        <div class="card-header">
            <h6>Pengirim
                {{-- <a class="source-link" href="https://jqueryvalidation.org/" target="_blank">source</a> --}}
            </h6>
        </div>
        <div class="card-body">
            <form action="barang" method="POST" id="barangForm" novalidate>
                {{ csrf_field() }}
                <div class="form-group">
                    <label>ID Barang</label>
                    <input type="text" class="form-control" name="id_barang" placeholder="PRMXXX" autofocus>
                </div>
                <div class="form-group">
                    <label>Jenis Barang</label>
                    <input type="text" class="form-control" name="jenis_barang" placeholder="KACA">
                </div>
                <div class="form-group">
                    <label>Berat Barang </label>
                    <input type="number" class="form-control" name="berat_barang" id="password" placeholder="5">
                </div>
                <div class="form-group">
                    <label>ID Pengirim</label>
                    <select name="id_pengirim" id="id_id_pengirim" class="form-control">
                        @foreach ($pengirims as $pengirim)
                        <option value=" {{ $pengirim->id_pengirim }} "> {{ $pengirim->id_pengirim }} -
                            {{ $pengirim->nama_pengirim }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Jumlah PCS </label>
                    <input type="number" class="form-control" name="jumlah_pcs" id="password" placeholder="5">
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