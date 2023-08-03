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
            <form action="pengirim" method="POST" id="pengirimForm" novalidate>
                {{ csrf_field() }}
                <div class="form-group">
                    <label>ID Pengirim</label>
                    <input type="text" class="form-control" name="id_pengirim" placeholder="ID" autofocus>
                </div>
                <div class="form-group">
                    <label>Nama Pengirim</label>
                    <input type="text" class="form-control" name="nama_pengirim" placeholder="full name">
                </div>
                <div class="form-group">
                    <label>Alamat Pengirim</label>
                    <input type="text" class="form-control" name="alamat_pengirim" id="password" placeholder="address">
                </div>
                <div class="form-group">
                    <label>No Telephone</label>
                    <input type="number" class="form-control" name="no_telpon" id="password"
                        placeholder="6281545778612">
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